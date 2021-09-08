<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * 
     */
    public function create(Request $request)
    {
        # code...
        return view('postform');
    }

    public function store(Request $request)
    {
        # code...
    }

    public function update(Request $request)
    {
        # code...
    }

    public function delete(Request $request)
    {
        # code...
    }
}
