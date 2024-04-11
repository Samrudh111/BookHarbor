<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'profile_picture',
        'email',
        'email_verified_at',
        'is_email_verified',
        'email_token',
        'phone',
        'phone_verified_at',
        'phone_verified',
        'alternate_phone',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     // Define the relationship with carts
     public function carts()
     {
         return $this->hasMany(Cart::class);
     }
 
     // Define the relationship with payments
     public function payments()
     {
         return $this->hasMany(Payment::class);
     }

    public function address()
    {
        return $this->hasOne(Address::class);
    }


}
