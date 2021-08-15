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

Route::get('/', function () {
    return view('home', [
        "title" => "Halaman Utama"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Halaman About",
        "nama" => "Nazaruddin",
        "email" => "nazaruddin@gmail.com",
        "foto" => "nazar.jpeg"
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title"=> "Blog"
    ]);
});