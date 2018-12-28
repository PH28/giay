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

    public function users(){
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function orders_detail(){
    	return $this->hasMany('App\OrderDetail','order_id','id');
    } 	
}
