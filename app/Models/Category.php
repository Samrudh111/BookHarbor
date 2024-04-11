<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'book_category'

    ];
    // Define the relationship with the Product model
 public function book()
 {
     return $this->hasMany(OurBook::class);
 }

 public function sluggable(): array
 {
     return [
         'slug' => [
             'source' => 'book_category' // Replace with your actual column name
         ]
     ];
 }
}
