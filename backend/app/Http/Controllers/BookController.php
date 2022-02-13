<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\IndexRequest;

class BookController extends Controller
{
    function index(IndexRequest $request) {
        $books = Book::all();
        return view("book.index", compact("books"));
    }

    function show(Int $id) {
        $book = Book::find($id);
        return view("book.show", compact("book"));
    }

    function create() {

    }
}
