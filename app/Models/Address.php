<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'phone',
        'address',
        'landmark',
        'country',
        'state',
        'city',
        'pincode',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
