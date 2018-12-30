<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
    	'user_id',
        'receiver_name',
    	'total',
    	'date',
    	'phone',
    	'address',
    	'status',
    ];

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function orderdetails(){
    	return $this->hasMany('App\OrderDetail','order_id','id');
    } 	
}
