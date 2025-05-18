<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable implements AuthenticatableContract
{
    use HasFactory, Notifiable;

    protected $table = 'Accounts';
    protected $primaryKey = 'user_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'username',
        'password',
        'email',
        'role',
        'balance',
        'is_active',
        'avatar',
        'email_verified_at',
        'remember_token',
    ];

    public function uploadedDocuments()
    {
        return $this->hasMany(Document::class, 'uploaded_by', 'user_id');
    }

    public function favorites()
    {
        return $this->belongsToMany(Document::class, 'favorites', 'user_id', 'document_id')->withTimestamps();
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'user_id', 'user_id');
    }

    public function downloads()
    {
        return $this->hasMany(Download::class, 'user_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'user_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'user_id', 'user_id');
    }

    public $timestamps = false;

    public function getAuthPassword()
    {
        return $this->password;
    }

    protected $hidden = [
        'Password',
        'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'email_verified_at'
    ];
}