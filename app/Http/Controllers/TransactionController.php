<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'type' => 'required|in:withdraw,sent_back',
            'book_ids' => 'required|array|min:1',
            'book_ids.*' =>'exists:books,id',
            'amounts' => 'required|array',
            'amounts.*' => 'required|integer|min:1',
        ]);
        foreach($validated['book_ids'] as $id){
            Transaction::create([
                'book_id' =>$id,
                'type' =>$validated['type'],
                'amount' => $validated['amounts'][$id],
            ]);
        }
        return back()->with('success', 'Saved!');
    }
}
