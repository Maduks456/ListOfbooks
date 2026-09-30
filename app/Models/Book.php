<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable =['name', 'code', 'cover', 'parent_code'];
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function parent()
    {
        return $this->belongsTo(Book::class, 'parent_code', 'code');
    }
    public function children()
    {
        return $this->hasMany(Book::class, 'parent_code', 'code');
    }
}
