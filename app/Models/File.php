<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'file_orig_name',
        'size',
        'is_encrypted',
        'user_id',
    ];
}