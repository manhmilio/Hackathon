<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'comment_id';
    protected $fillable = ['user_id', 'document_id', 'content'];

    public function user()
    {
        return $this->belongsTo(Account::class, 'user_id', 'user_id');
    }

    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id', 'document_id');
    }
}
