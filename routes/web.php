<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", function () {
    return view('pages/login_page');
});
Route::get('/register', function () {
    return view('pages/register_page');
});

Route::post('/register', function (Request $request) {
    dd($request);
    return;
})->name('register.post');

Route::post('/login', function (Request $request) {
    dd($request);
    return;
})->name('login.post');
