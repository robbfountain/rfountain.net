<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;

class SiteController extends Controller
{
    public function index()
    {
        return view('index', [
            'intro' => WinkPage::where('slug','who-am-i')->first(),
        ]);
    }
}
