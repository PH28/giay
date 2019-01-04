<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
        'option_id',
        'product_id'];

    public function products(){
    	return $this->belongsTo('App\Product','product_id','id');
    }

    public function options(){
        return $this->hasmany('App\Option');
    }
}
