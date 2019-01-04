<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    protected $table = 'orders';
    protected $fillable = [
    	'user_id',
    	'total',
    	'date',
    	'phone',
    	'address',
    	'status',
    ];

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function orders_details(){
    	return $this->hasMany('App\OrderDetail','order_id','id');
    } 	
}
