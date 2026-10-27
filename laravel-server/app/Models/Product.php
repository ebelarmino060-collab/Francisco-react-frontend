<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> 
     * protected filliable - allow to insert to the coloum 
    */
    use HasFactory;


    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

     public function orderProduct(){
        return $this->hasMany(OrderProduct::class);
    }

     public function review(){
        return $this->hasMany(Review::class);
    }

     public function order(){
        return $this->belongsToMany(Order::class, 'order_products');
    }
}
