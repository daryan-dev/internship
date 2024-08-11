<?php

use App\Http\Controllers\bookController;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [[bookController::class,'index']]);

Route::view('insertpage', 'insert');

Route::get('/binsert',[bookController::class,'insert']);
