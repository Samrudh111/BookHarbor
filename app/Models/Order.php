<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'carts_id',
        'address_id',
        'payments_id',
        'status',
        'r_pay_id',
        'ordered_at',
        'packed_at',
        'shipped_at',
        'delivered_at',
        'reason_to_cancel',
    ];

    // Define the relationship with Cart model
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address(){
        return $this->belongsTo(Address::class);
    }

}
