<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\signinController;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [bookController::class, 'index']);

Route::get('/binsert', [bookController::class, 'insert']);

Route::post('/signinuser', [signinController::class, 'index']);

Route::post('/insertuser',[signinController::class, 'signup']);


Route::view('/insertpage', 'insertpage');

Route::view('/signin', 'signin');

Route::view('/signup', 'signup');
