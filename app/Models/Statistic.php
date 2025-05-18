<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $primaryKey = 'statistic_id';
    protected $fillable = [
        'total_books',
        'total_users',
        'total_comments',
        'total_ratings',
        'total_downloads',
        'total_purchases'
    ];
}
