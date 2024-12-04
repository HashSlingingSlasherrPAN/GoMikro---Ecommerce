<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['users_id', 'total_price', 'status', 'shipping_methods_id'];

    public function user()
    {
        return $this->belongsTo(User::class,  'users_id');
    }

    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethod::class, 'shipping_methods_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'orders_id');
    }


}
