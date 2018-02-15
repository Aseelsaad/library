<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class FrontendController extends Controller
{
    public function index()
    {
        //to display the last 4 books added to the database
       $books = Book::orderBy('id', 'desc')->take(4)->get();
        return view('frontend.home',compact('books'));
    }

    public function books()
    {
        $books = Book::all();
        return view('frontend.books',compact('books'));
    }

    public function book($id)
    {
          $book = Book::find($id);
           return view ('frontend.book',compact('book'));
    }
}
