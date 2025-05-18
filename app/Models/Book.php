<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'book_id';
    protected $fillable = ['title', 'isbn', 'description', 'publication_date', 'image'];

    public function documents()
    {
        return $this->hasMany(Document::class, 'book_id', 'book_id');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_author', 'book_id', 'author_id');
    }

    public function publishers()
    {
        return $this->belongsToMany(Publisher::class, 'book_publisher', 'book_id', 'publisher_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }
}
