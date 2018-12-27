<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orders_detail';
    protected $fillable = [
        'price',
        'quantity',
        'order_id',
        'product_id',
    ];

    public function orders(){
        return $this->belongsTo('App\Order','order_id','id');
    }

    public function products(){
        return $this->belongsTo('App\Product','product_id','id');
    }
}
