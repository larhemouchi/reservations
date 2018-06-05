<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
	/*
   use SoftDeletes;

    protected $dates=['deleted_at'];

    */
    public function artisteTypes(){
     
     return $this->hasMany('App\Show', 'artiste_type_show', 'artiste_type_id', 'show_id');

    }

	public function representation(){
     
     return $this->hasMany('App\Representation');

    }

	public function location(){
     
     return $this->belongsTo('App\Location');

    }

}
