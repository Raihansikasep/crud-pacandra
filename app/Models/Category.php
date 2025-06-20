<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['name','slug'];

    public function Product(){
        return $this->hasMany(Product::class);
    }
}
