<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\Wink;
use Wink\WinkPage;
use Wink\WinkPost;

class BlogController extends Controller
{
    public function index()
    {
        return view('welcome',[
            'posts' => WinkPost::latest()->paginate(10),
            'full' => false,
        ]);
    }

    public function show($slug)
    {
        return view('welcome', [
            'posts' => WinkPost::where('slug',$slug)->get(),
            'full' => true,
        ]);
    }
}
