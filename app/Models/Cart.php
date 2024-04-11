<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'is_paid',
        'razor_pay_order_id',
        'amount_paid'

    ];

    public function book()
    {
        return $this->belongsTo(OurBook::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function cart_items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'cart_id');
    }

    public function getCartTotal()
    {
        $total = 0;

        foreach ($this->cart_items as $cartItem) {
            $total += $cartItem->getTotalPrice();
        }

        if ($this->coupon && $this->coupon->minimum_amount < $total) {
            $total -= $this->coupon->discount_price;
        }

        return $total;
    }
}
