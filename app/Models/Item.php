<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function Order() {
        return $this->hasMany(Order::class);
    }
    public function Cart() {
        return $this->hasMany(Cart::class);
    }
    use HasFactory;

    protected $table = 'items';
    public $timestamps = true;

    protected $fillable = [
        'photo', 'name', 'description', 'rating', 'stock', 'price', 'sold', 'created_at', 'updated_at',
    ];
}