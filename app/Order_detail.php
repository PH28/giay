<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = 'orders_detail';
    protected $fillable = [
    	'price',
    	'quantity',
    	'orders_id',
    	'products_id',
    ];

    public function orders(){
    	return $this->belongsTo('App\Order','orders_id','id');
    }

    public function products(){
    	return $this->belongsTo('App\Product','products_id','id');
    }
}
