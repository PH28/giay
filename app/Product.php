<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
    	'name',
    	'content',
    	'image',
    	'price',
    	'quantity',
    	'categories_id'
    ];

    public function orders_detail(){
    	return $this->hasMany('App\Order_detail','products_id','id');
    }

    public function comments(){
    	return $this->hasMany('App\Comment','products_id','id');
    }

    public function categories(){
    	return $this->belongsTo('App\Category','categories_id','id');
    }

    public function products_detail(){
    	return $this->hasMany('App\Product_detail','products_id','id');
    }
}
