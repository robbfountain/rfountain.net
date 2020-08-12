<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;
use Wink\WinkPost;

class PageController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($id)
    {
        if(WinkPost::where('slug',$id)->exists())
            return redirect()->route('blog.show',$id);

        return view('blog-post', [
            'blog' => WinkPage::where('slug', $id)->firstOrFail()
        ]);
    }
}
