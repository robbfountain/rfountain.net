<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            'blogs' => WinkPost::latest()->paginate(10),
        ]);
    }

    public function show($slug)
    {
        return view('blog-post', [
            'post' => WinkPost::where('slug', $slug)->firstOrFail(),
        ]);
    }
}
