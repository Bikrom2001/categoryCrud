<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//category Page 
Route::get('/category', function () {
    return view('admin.category.index');
});

