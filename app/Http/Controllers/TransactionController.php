<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::latest()
            ->get()
            ->groupBy(['type','batch_id']);
        return view('transactions', compact("transactions"));
    }
    public function store(Request $request){
        $batch_id = Str::uuid();
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
                'batch_id' =>$batch_id,
            ]);
        }
        return back()->with('success', 'Saved!');
    }
}
