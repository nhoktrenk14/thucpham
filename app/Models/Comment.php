<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'reply',
        'user_id',
        'product_id',
        'status',
        'created_at',
        'updated_at'
    ];
}
