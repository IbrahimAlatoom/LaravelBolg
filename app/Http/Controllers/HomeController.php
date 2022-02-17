<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('blog.welcome');
    }

    public function show($id)
    {
        return view('blog.post');
    }

    public function contact()
    {
        return view('blog.contact');
    }
}
