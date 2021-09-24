<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'status',
        'slug',
        'created_at',
        'updated_at'
    ];

    public function products(){
       return $this->hasMany(Product::class);
    }

    public function scopeactive(){
        return $this->where('status', 1);
    }
}
