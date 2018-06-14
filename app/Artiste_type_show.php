<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Artiste_type_show extends Model
{

	 public $table = "artiste_type_show";
	
    use SoftDeletes;

    protected $dates=['deleted_at'];
    
}
