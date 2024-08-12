<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class bookController extends Controller
{
    function index()
    {
        $books = DB::select('select * from books');
        return view('welcome', ['books' => $books]);
    }

    function insert()
    {
        DB::insert('insert into books (name,page,type) values (?, ?, ?)', [(string) request('bname'), (int) request('pageNum'), (string) request('btype')]);
        return redirect('/');
    }
}
