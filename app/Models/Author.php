<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $primaryKey = 'author_id';
    protected $fillable = ['name', 'biography', 'image'];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_author', 'author_id', 'book_id');
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'document_author', 'author_id', 'document_id');
    }
}
