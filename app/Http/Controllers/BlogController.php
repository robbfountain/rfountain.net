<?php

namespace App\Http\Controllers;

use Wink\WinkPost;

/**
 * Class BlogController
 * @package App\Http\Controllers
 */
class BlogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('blog', [
            'blogs' => WinkPost::published()
                ->live()
                ->latest()
                ->paginate(10),
        ]);
    }

    /**
     * @param $slug
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        return view('blog-post', [
            'blog' => WinkPost::live()
                ->published()
                ->where('slug', $slug)
                ->firstOrFail(),
        ]);
    }
}
