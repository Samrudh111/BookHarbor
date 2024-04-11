<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'our_book_id',
        'quantity',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function book()
    {
        return $this->belongsTo(OurBook::class,'our_book_id');
    }

    public function getTotalPrice()
    {
        return $this->quantity * $this->book->book_selling_price;
    }

    public function getTotalBooks(){
        return $this->book->total_books - $this->quantity;
    }
}
