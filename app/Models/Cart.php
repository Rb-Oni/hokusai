<?php

namespace App\Models;

use App\Models\User;
use App\Models\CartProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cartProducts()
    {
        return $this->hasMany(CartProduct::class);
    }
}
