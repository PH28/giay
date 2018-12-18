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
    	'category_id'
    ];

    public function orders_detail(){
    	return $this->hasMany('App\OrderDetail','product_id','id');
    }

    public function comments(){
    	return $this->hasMany('App\Comment','product_id','id');
    }

    public function categories(){
    	return $this->belongsTo('App\Category','category_id','id');
    }

    public function products_detail(){
    	return $this->hasMany('App\Product_detail','product_id','id');
    }
}
