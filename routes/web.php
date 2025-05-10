<?php

use Illuminate\Support\Facades\Route;

Route::get('/template', function () {
    return view('layout.template');
});



Route::get('/', function () {
    return view('user.admin');
});
Route::get('/s', function () {
    return view('layout.sidebar');
});
