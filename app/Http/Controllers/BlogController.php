<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            'blogs' => WinkPost::published()
                ->live()
                ->latest()
                ->paginate(10),
        ]);
    }

    public function show($slug)
    {
        return view('blog-post', [
            'post' => WinkPost::live()
                ->published()
                ->where('slug', $slug)
                ->firstOrFail(),
        ]);
    }
}
