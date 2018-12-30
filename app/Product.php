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

    public function orderdetails(){
    	return $this->hasMany('App\OrderDetail','product_id','id');
    }

    public function comments(){
    	return $this->hasMany('App\Comment','product_id','id');
    }

    public function category(){
    	return $this->belongsTo('App\Category','category_id','id');
    }

    public function productdetails(){
    	return $this->hasMany('App\Product_detail','product_id','id');
    }
}
