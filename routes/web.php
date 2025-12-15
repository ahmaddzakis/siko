<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/create-event', function () {
    return view('create-event');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::post('/login', function () {
    // Logic login sederhana (simulasi)
    return redirect('/home');
})->name('login.post');