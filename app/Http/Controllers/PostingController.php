<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;

class PostingController extends Controller
{
    public function __construct() {
        $this->Posting = new Posting();
    }
    
    public function posting ()
    {
        $data = [
            'posting' => $this->Posting->get(),
        ];
        return view ('create.create', $data);
    }
    
    public function detailposting ($id)
    {
        if (!$this ->Posting->detailData($id)){
            abort(404);
        }
        $data = [
            'posting' => $this ->Posting->detailData($id),
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
            'photo' => 'required|mimes:jpg,jpeg,png,webp|max:100',
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
            'title' => Request()->title,
            'categories' => Request()->categories,
            'description' => Request()->description,
            'photo' => $fileName,
        ];

        $this->Posting->addData($data);
        return redirect()->route('posting')->with('pesan','Data Berhasil Di Tambahkan !!');
    }
    
    public function editposting($id)
    {
        if (!$this->Posting->detailData($id)) {
            abort(404);
        }
        $data = [
            'posting'=> $this->Posting->detailData($id),
        ];
        return view ('create.editposting', $data);
    }
    public function updateposting($id)
    {
        Request()->validate([
            'title' => 'required|max:100',
            'categories' => 'required|max:20',
            'description' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png,webp|max:100',
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

        $this->Posting->editData($id, $data);
        }else {
            //jika tidak ingin ganti foto
            $data = [
                'title' => Request()->title,
                'categories' => Request()->categories,
                'description' => Request()->description,
            ];
            $this->Posting->editData($id, $data);
        }
        return redirect()->route('posting')->with('pesan','Data Berhasil Di Update !!');
    }
    public function deleteposting($id)
    {
        //hapus foto
        $posting = $this->Posting->detailData($id);
        if ($posting->photo <> "") {
            unlink(public_path('photo_posting') . '/' . $posting->photo);
        }   
        $this->Posting->deleteData($id);
        return redirect()->route('posting')->with('pesan','Data Berhasil Di Hapus !!');

    }
}
