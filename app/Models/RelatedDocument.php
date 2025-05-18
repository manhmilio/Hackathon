<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelatedDocument extends Model
{
    protected $fillable = ['document_id', 'related_document_id'];

    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }

    public function related()
    {
        return $this->belongsTo(Document::class, 'related_document_id');
    }
}
