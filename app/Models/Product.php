<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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
}
