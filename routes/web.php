<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('loginpage');
});

// mau dicoba pull dina