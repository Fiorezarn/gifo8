<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->Posting = new Posting();
        $this->User = new User();
    }

    public function index()
    {
        $data = [
            'totalposting' => $this->Posting->count(),
            'totaluser' => $this->User->where('role', '0')->count(),
            'totaladmin' => $this->User->where('role', '1')->count(),
            'admin' => $this->Posting->allData(),
        ];
        return view('adminlte.v_template', $data);
    }

    public function detailadmin ($id)
    {
        if (!$this ->Posting->detailData($id)){
            abort(404);
        }
        $data = [
            'admin' => $this ->Posting->detailData($id),
        ];
        return view ('adminlte.v_detailcontent', $data);
    }

}
