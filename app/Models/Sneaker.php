<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sneaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'sneaker_name',
        'sneaker_code',
        'sneaker_color',
        'sneaker_price',
        'sneaker_image',
        'sneaker_description',
        'brand_id',
        'category_id',
        'created_at',
        'updated_at',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'sneaker_sizes')
                    ->withPivot('stock')
                    ->withTimestamps();
    }
    
}
