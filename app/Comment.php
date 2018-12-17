<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
    	'content',
    	'users_id',
    	'products_id',
    ];

    public function users(){
    	return $this->belongsTo('App\User','users_id','id');
    }

    public function products(){
    	return $this->belongsTo('App\Product','products_id','id');
    }
}
