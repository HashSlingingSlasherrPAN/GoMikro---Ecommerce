<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['quantity', 'price', 'subtotal', 'orders_id', 'products_id'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'orders_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

    public function getSubtotalAttribute()
    {
        return $this->quantity * $this->price;
    }

}
