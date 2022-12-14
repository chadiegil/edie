<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'user_id',
        // 'cart_id'
    ];

    // public function users(){
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }
    // public function products(){
    //     return $this->belongsTo(Product::class, 'product_id', 'id');
    // }

    // public function carts(){
    //     return $this->hasMany(Cart::class, 'cart_id', 'id');
    // }



    public function orders(){
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }


    /**
     * Get the user that owns the OrderItems
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
