<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function category() {
        return $this->hasMany(Category::class);
    }

    public function cart() {
        return $this->hasOne(Cart::class);
    }
    
    public function vendor() {
        return $this->hasMany(Vendor::class);
    }
        
    public function food() {
        return $this->hasMany(Food::class);
    }
    
    public function order() {
        return $this->hasMany(Order::class);
    }
    
    public function rating() {
        return $this->hasMany(Rating::class);
    }

    public function wishlist() {
        return $this->hasMany(Wishlist::class);
    }
}
