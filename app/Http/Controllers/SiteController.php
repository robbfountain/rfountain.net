<?php

namespace App\Http\Controllers;

use Wink\WinkPage;

class SiteController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index', [
            'intro' => WinkPage::where('slug', 'who-am-i')->first(),
        ]);
    }
}
