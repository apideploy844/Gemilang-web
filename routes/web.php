<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/booking', function () {
    return view('pages.booking');
});

Route::get('/contact', function () {
    return view('pages.contact');
});



// login , Resgitrasi , Forgot Password

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});


Route::get('/register', function () {
    return view('auth.register');
});