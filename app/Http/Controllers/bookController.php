<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
function index() {
    $book = new Book;
    $books = Book::all();
    return view('welcome',['books'=>$books]);
}

function insert(){
    $book = new Book;
    $book->name=(String)request('bname');
    $book->page=(int)request('pageNum');
    $book->type=(String)request('btype');
    $book->save();
    return redirect('/');
}
}
