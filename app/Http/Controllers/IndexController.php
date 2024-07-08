<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class IndexController extends Controller
{
    public function home()
    {
        $categories = Category::take(4)->get();
        return view('home', ['categories' => $categories]);
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
        $products = Product::all();
        $categories = Category::all();
        return view('products', compact('products','categories'));

    }
}

