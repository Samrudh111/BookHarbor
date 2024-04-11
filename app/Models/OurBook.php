<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name',
        'publisher_name',
        'published_date',
        'category_id',
        'book_title',
        'book_subtitle',
        'total_books',
        'book_image',
        'book_original_price',
        'book_selling_price',
        'book_description',
        'status',
    ];

     // Define the relationship with the Category model
 public function category()
 {
     return $this->belongsTo(Category::class);
 }

 public function similarProducts()
 {
     return $this->hasMany(OurBook::class, 'category_id', 'category_id')
         ->where('id', '!=', $this->id)
         ->inRandomOrder()
         ->limit(10);
 }

 
}
