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

    public $timestamps = false;

    public function getAuthPassword()
    {
        return $this->Password();
    }

    protected $hidden = [
        'Password',
        'remember_token',
    ];
}