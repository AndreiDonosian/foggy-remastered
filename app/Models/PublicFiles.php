<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicFiles extends Model
{
    protected $fillable = [
        'user_hash',
        'path',
        'public_till',
    ];

    protected $casts = [
        'public_till' => 'date',
    ];
}