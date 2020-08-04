<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;

class BlogController extends Controller
{
    public function index()
    {
        return view('welcome',[
            'content' => WinkPage::first(),
        ]);
    }
}
