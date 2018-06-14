<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
	
    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable = [

            'slug',
            'title',
            'poster_url',
            'location_id',
            'price'

    ];


    public function artisteTypes(){
     
     return $this->hasMany('App\Show', 'artiste_type_show', 'artiste_type_id', 'show_id');

    }

	public function representations(){
     
     return $this->hasMany('App\Representation');

    }

	public function location(){
     
     return $this->belongsTo('App\Location');

    }

}
