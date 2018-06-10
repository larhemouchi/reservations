<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Representation extends Model
{

  protected $fillable = [
        'id',
        'show_id',
        'when',
        'location_id',
        
    ];
    public function users(){
     
     return $this->hasMany('App\User')->withPivot('places');

    }

	public function show(){
     
     return $this->belongsTo('App\Show');

    }

	public function location(){
     
     return $this->belongsTo('App\Location');

    }
}
