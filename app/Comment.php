<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
    	'content',
    	'user_id',
    	'product_id',
    ];

    public function users(){
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function products(){
    	return $this->belongsTo('App\Product','product_id','id');
    }
}
