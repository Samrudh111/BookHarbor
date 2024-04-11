<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'book_name',
        'book_category',
        'book_title',
        'book_subtitle',
        'book_image',
        'book_original_price',
        'book_selling_price',
        'book_description',
        'sold_by',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
