<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Explore;


class ExploreController extends Controller
{
    public function __construct()
    {
        $this->Explore = new Explore();
    }

    public function index ()
    {
        $data = [
            'explore' => $this->Explore->get(),
        ];
        return view('explore', $data);
    }
    
    public function category ($categories) 
    {
        if (!$this->Explore->detailCategories($categories)) {
            abort(404);
        }

        return view('category');
    }
}
