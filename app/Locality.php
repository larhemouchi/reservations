<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
use SoftDeletes;

    protected $dates=['deleted_at'];
    
    protected $fillable = [
        'postal_code',
        'locality'
    ];

	public function location(){
     
     return $this->hasMany('App\Location');

    }
}

