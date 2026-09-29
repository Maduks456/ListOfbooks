<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'type' => 'required|in:withdraw,sent_back',
            'book_ids' => 'required| array, min:1',
            'book_ids.*' =>'exists:book,id',
            'amounts' => 'required| array',
            'amount.*' => 'required| integer, min:1',
        ]);
    }
}
