<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
	public $table = "category";
   use SoftDeletes;

    protected $dates=['deleted_at'];



    protected $fillable = [
        'id',
        'name_category',
        
    ];

	

	public function show(){
     
     return $this->hasOne('App\Show');

    }

}
