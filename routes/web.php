<?php

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $book = new Book;
    $books = Book::all();
    return view('welcome',['books'=>$books]);
});


Route::view('insert', 'insertation');

Route::get('/binsert', function () {
    $book = new Book;
    $book->name=(String)request('bname');
    $book->page=(int)request('pageNum');
    $book->type=(String)request('btype');
    $book->save();
    return redirect('/');
});
