<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'images' => 'array',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function cartitem() {
        return $this->hasMany(CartItem::class);
    }

    public function wishlist() {
        return $this->hasMany(Wishlist::class);
    }

    public function orderitem() {
        return $this->belongsToMany(OrderItem::class);
    }
}
