<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_detail extends Model
{
    protected $table = 'products_detail';
    protected $fillable = [
    	'color',
    	'size',
    	'products_id',
    ];

    public function products(){
    	return $this->belongsTo('App\Product','products_id','id');
    }
}
