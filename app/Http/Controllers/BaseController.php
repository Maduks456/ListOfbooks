<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        $parentbooks =Book::whereNull('parent_code')->with('children')->get();
        return view('catalogue', compact("parentbooks"));
    }
}
