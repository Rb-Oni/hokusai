<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Category;
use App\Models\CartProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'img',
        'name',
        'category_id',
        'volume',
        'author',
        'date',
        'fv_editor',
        'ov_editor',
        'paperback_price',
        'digital_price',
        'quantity',
        'synopsis',
        'language',
        'isbn10',
        'isbn30',
        'pages',
        'weight',
        'size',
        'title',
        'origin',
        'fv_volumes_number',
        'ov_volumes_number'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function cartProduct()
    {
        return $this->hasOne(CartProduct::class);
    }
}
