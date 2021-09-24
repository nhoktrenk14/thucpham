<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'image_id',
        'category_id',
        'brand_id',
        'regular_price',
        'promotional_price',
        'sale',
        'description',
        'status',
        'star',
        'created_at',
        'updated_at'
    ];
    public function scopeSeach($query)
    {
        if($key = request()->key){
            $products = $query->where('name','like','%'.$key.'%');
            return $query;
        };
    }
}
