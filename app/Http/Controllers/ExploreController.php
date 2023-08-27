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
    
    public function pakaian () 
    {
        $data = [
        'posting' => $this->Explore->where('categories', 'pakaian')->get(),
        ];

        return view('postingpakaian', $data);
    }
    public function celana () 
    {
        $data = [
        'posting' => $this->Explore->where('categories', 'celana')->get(),
        ];

        return view('postingcelana', $data);
    }
    public function suit () 
    {
        $data = [
        'posting' => $this->Explore->where('categories', 'suit')->get(),
        ];

        return view('postingsuit', $data);
    }
    public function women () 
    {
        $data = [
        'posting' => $this->Explore->where('categories', 'women')->get(),
        ];

        return view('postingwomen', $data);
    }
    public function mens () 
    {
        $data = [
        'posting' => $this->Explore->where('categories', 'men')->get(),
        ];

        return view('postingmens', $data);
    }
    public function formal () 
    {
        $data = [
        'posting' => $this->Explore->where('categories', 'formal')->get(),
        ];

        return view('postingformal', $data);
    }
}
