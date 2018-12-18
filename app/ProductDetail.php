<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table = 'products_detail';
    protected $fillable = [
    	'color',
    	'size',
    	'product_id',
    ];

    public function products(){
    	return $this->belongsTo('App\Product','product_id','id');
    }
}
