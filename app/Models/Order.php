<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable =
    [
        'user_id',
        'payment_method',
        'subtotal',
        'delivery_fee',
        'delivery_method',
        'payment_status',
        'address_details',
        'total_price', 
        'status',
        'message',
        'tracking_id',
    ];

    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }

}
