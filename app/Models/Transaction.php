<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable =['type', 'book_id', 'amount'];
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
