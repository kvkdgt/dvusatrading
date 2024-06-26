<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');

    }
    public function about()
    {
        return view('about');

    }

    public function gallery()
    {
        return view('gallery');

    }
    public function products()
    {
        return view('products');

    }
}

