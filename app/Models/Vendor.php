<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'images' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
