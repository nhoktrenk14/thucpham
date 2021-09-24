<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'content',
        'summary',
        'status',
        'blog_category_id',
        'created_at',
        'updated_at'
    ];
}
