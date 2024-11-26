<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('welcome');
})->name('home.index');

Route::get("/login", [LoginController::class, 'showLoginForm']);
Route::get("/logout", [LoginController::class, 'logout']);
Route::get('/register', function () {
    return view('pages/register_page');
});

Route::post('/register', function (Request $request) {
    dd($request);
    return;
})->name('register.post');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/dashboard', function () {
    return view('pages/dashboard_page');
});

Route::get('/profile', function () {
    return view('pages/profile_page');
});

Route::get('/blog', function() {
    return view('pages/create_new_blog_page');
});
