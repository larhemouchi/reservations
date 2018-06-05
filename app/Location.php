<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Location extends Model
{
	/*
    use SoftDeletes;

    protected $dates=['deleted_at'];

    */

	public function locality(){
     
     return $this->belongsTo('App\Locality');

    } 


	public function show(){
     
     return $this->hasOne('App\Show');

    }

	public function reprasentation(){
     
     return $this->hasOne('App\Represetation');

    }
}
