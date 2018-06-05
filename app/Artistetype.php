<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Artistetype extends Model
{
    //
    /*
       use SoftDeletes;

    protected $dates=['deleted_at'];
    */

    public function shows(){
     
     return $this->hasMany('App\Show', 'artiste_type_show', 'show_id', 'artiste_type_id');

    }
}
