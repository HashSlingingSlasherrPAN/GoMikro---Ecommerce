<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'stock', 'image',  'description', 'categories_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }
}
