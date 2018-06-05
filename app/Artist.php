<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 


class Artist extends Model
{
	/*
    use SoftDeletes;

    protected $dates=['deleted_at'];
*/


    public function types(){
     
     return $this->hasMany('App\Type');

    }

}
