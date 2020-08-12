<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])
    ->name('home');

Route::get('blog', [\App\Http\Controllers\BlogController::class, 'index'])
    ->name('blog');

Route::get('blog/{slug}', [\App\Http\Controllers\BlogController::class, 'show'])
    ->name('blog.show');

Route::view('home-lab', 'blog-post', [
    'blog' => \Wink\WinkPage::where('slug', 'home-lab')->first(),
])->name('home-lab');
