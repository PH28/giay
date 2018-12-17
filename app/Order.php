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

    public function users(){
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function orders_detail(){
    	return $this->hasMany('App\Order_detail','orders_id','id');
    } 	
}
