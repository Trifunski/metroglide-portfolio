<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'quantity',
        'price',
        'sneaker_id',
        'size_id',
        'created_at',
        'updated_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
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
