<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//category Page 
Route::get('/category', [CategoryController::class, 'index']);

