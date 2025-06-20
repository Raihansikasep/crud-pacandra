<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = ['user_id','total_price','order_code','status'];

    public function user(){
        return $this->belongsTo(User::clas);
    }

    public function products(){
        return $this->belongsToMany(Product::clas)->withPivot('qty','price')
            ->withTimestamps();
    }   

}
