<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $primaryKey = 'document_id';
    protected $fillable = ['book_id', 'title', 'file_path', 'price', 'description', 'image', 'uploaded_by'];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'book_id');
    }

    public function uploader()
    {
        return $this->belongsTo(Account::class, 'uploaded_by', 'user_id');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'document_author', 'document_id', 'author_id');
    }

    public function publishers()
    {
        return $this->belongsToMany(Publisher::class, 'document_publisher', 'document_id', 'publisher_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'document_category', 'document_id', 'category_id');
    }

    public function favorites()
    {
        return $this->belongsToMany(Account::class, 'favorites', 'document_id', 'user_id')->withTimestamps();
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'document_id', 'document_id');
    }

    public function downloads()
    {
        return $this->hasMany(Download::class, 'document_id', 'document_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'document_id', 'document_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'document_id', 'document_id');
    }

    public function relatedDocuments()
    {
        return $this->belongsToMany(Document::class, 'related_documents', 'document_id', 'related_document_id');
    }
}
