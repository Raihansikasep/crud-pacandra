<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $fillable = ['user_id', 'product_id', 'qty'];
    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
