<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'quantity',
        'sneaker_id',
        'size_id',
        'created_at',
        'updated_at',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function sneaker()
    {
        return $this->belongsTo(Sneaker::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }
}
