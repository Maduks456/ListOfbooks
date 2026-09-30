<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('catalogue', compact("books"));
    }
}
