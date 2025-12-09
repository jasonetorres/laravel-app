<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/aiblog', function () {
    return view('aiblog');
});
