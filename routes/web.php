<?php

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
    return view('login2');
});

Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/login2', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/input', function () {
    return view('input');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/vaksin', function () {
    return view('vaksin');
});

Route::get('/tinggi', function () {
    return view('tinggi');
});

Route::get('/direktori', function () {
    return view('direktori');
});

Route::get('/rendah', function () {
    return view('rendah');
});

Route::get('/logout', function () {
    return view('login2');
});

