<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SneakerSize extends Model
{
    use HasFactory;

    protected $fillable = [
        'sneaker_id',
        'size_id',
        'stock',
        'created_at',
        'updated_at',
    ];

    public function sneaker()
    {
        return $this->belongsTo(Sneaker::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

}
