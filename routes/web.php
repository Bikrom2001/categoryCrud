<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//category Page 
Route::get('/category', function () {
    $data['$categories'] = Category::get();
    return view('backend.category.index', $data);
});

