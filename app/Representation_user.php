<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Representation_user extends Model
{

    public $table = "representation_user";
    
    //use SoftDeletes;

    protected $fillable = [

    	'representation_id' , 'user_id', 'places'
    ];

   protected $dates=['deleted_at'];

    public function user(){

    	return $this->belongsTo('App\User');// belongsTo == appartient a 
    }
}
