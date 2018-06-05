<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Role extends Model
{
	/*
    use SoftDeletes;

    protected $dates=['deleted_at'];
    */

	public function user(){
     
     return $this->hasOne('App\User');

    }
}
