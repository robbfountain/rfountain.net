<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'posts' => WinkPage::where('slug','who-am-i')->get(),
            'full' => false,
        ]);
    }
}
