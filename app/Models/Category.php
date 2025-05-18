<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';
    protected $fillable = ['name', 'description'];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_category', 'category_id', 'book_id');
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'document_category', 'category_id', 'document_id');
    }
}
