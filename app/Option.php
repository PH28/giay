<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
   protected $fillable = ['
    name',
    'product_detail_id',
    'option_group_id']; 

    public function productDetail(){
        return $this->belongsTo('App\ProductDetail');
    }

    public function optionGroup(){
        return $this->belongsTo('App\OptionGroup');
    }
}
