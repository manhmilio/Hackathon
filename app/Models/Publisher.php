<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $primaryKey = 'publisher_id';
    protected $fillable = ['name', 'address', 'image'];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_publisher', 'publisher_id', 'book_id');
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'document_publisher', 'publisher_id', 'document_id');
    }
}
