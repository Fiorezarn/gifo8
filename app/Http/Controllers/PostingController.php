<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostingController extends Controller
{
    protected $posting;
    protected $user;

    public function __construct() {
        $this->posting = new Posting();
        $this->user = new User();
    }
    
    public function posting()
    {
        $postings = [];
    
        if (Auth::check()) {
            $user = $this->user->find(Auth::user()->id);
            if ($user) {
                $postings = $user->postings;
            }
        }
    
        $data = [
            'postings' => $postings, // Menggunakan 'postings' bukan 'posting'
        ];
    
        return view('create.create', $data);
    }
    
    
    public function detailposting ($id)
    {
        if (!$this ->posting->detailData($id)){
            abort(404);
        }
        $data = [
            'posting' => $this ->posting->detailData($id),
        ];
        return view ('create.detailposting', $data);
    }

    public function addposting()
    {
        return view ('create.addposting');
    }

    public function insertposting()
    {
        Request()->validate([
            'title' => 'required|max:100',
            'categories' => 'required|max:20',
            'description' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png,webp',
        ],[
            'id.required' => 'wajib diisi !!',
            'id.unique' => 'id Sudah Ada !!',
            'id.min' => 'Min 1 Karakter',
            'id.max' => 'Max 6 Karakter'
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        //upload photo
        $file = Request()-> photo;
        $fileName = Request()->title.'.'.$file->extension();
        $file->move(public_path('photo_posting'), $fileName);

        $data = [
            'name_user' => Auth::user()->name,
            'user_id' => Auth::user()->id,
            'title' => Request()->title,
            'categories' => Request()->categories,
            'description' => Request()->description,
            'photo' => $fileName,
        ];

        $this->posting->addData($data);
        return redirect()->route('posting')->with('pesan','Data Berhasil Di Tambahkan !!');
    }
    
    public function editposting($id)
    {
        if (!$this->posting->detailData($id)) {
            abort(404);
        }
        $data = [
            'posting'=> $this->posting->detailData($id),
        ];
        return view ('create.editposting', $data);
    }
    public function updateposting($id)
    {
        Request()->validate([
            'title' => 'required|max:100',
            'categories' => 'required|max:20',
            'description' => 'required',
            'photo' => 'mimes:jpg,jpeg,png,webp',
        ],[
            'id.required' => 'wajib diisi !!',
            'id.unique' => 'id Sudah Ada !!',
            'id.min' => 'Min 1 Karakter',
            'id.max' => 'Max 6 Karakter'
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->photo <> "") {
        //jika ingin ganti foto
        //upload photo
        $file = Request()-> photo;
        $fileName = Request()->title.'.'.$file->extension();
        $file->move(public_path('photo_posting'), $fileName);

        $data = [
            'title' => Request()->title,
            'categories' => Request()->categories,
            'description' => Request()->description,
            'photo' => $fileName,
        ];

        $this->posting->editData($id, $data);
        }else {
            //jika tidak ingin ganti foto
            $data = [
                'title' => Request()->title,
                'categories' => Request()->categories,
                'description' => Request()->description,
            ];
            $this->posting->editData($id, $data);
        }
        return redirect()->route('posting')->with('pesan','Data Berhasil Di Update !!');
    }
    public function deleteposting($id)
    {
        //hapus foto
        $posting = $this->posting->detailData($id);
        if ($posting->photo <> "") {
            unlink(public_path('photo_posting') . '/' . $posting->photo);
        }   
        $this->posting->deleteData($id);
        return redirect()->route('posting')->with('pesan','Data Berhasil Di Hapus !!');

    }
    public function allposting()
    {
        $data = [
            'postings' => $this->posting->get()
        ];
        return view('landingpage', $data);
    } 
}

