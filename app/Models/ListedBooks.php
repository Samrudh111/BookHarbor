<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListedBooks extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'author_name',
        'book_category',
        'book_title',
        'book_subtitle',
        'book_image',
        'book_original_price',
        'book_selling_price',
        'book_description',
        'sold_by',
        'status',
    ];
}