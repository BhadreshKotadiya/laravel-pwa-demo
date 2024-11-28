<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// Home Page
Route::get('/', function () {
    $users = User::all(); // Fetch all users
    return view('home', compact('users'));
});

// About Us Page
Route::get('/about', function () {
    return view('about');
});

// Contact Us Page
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/search', function () {
    dd(request()->all());
})->name('search');
