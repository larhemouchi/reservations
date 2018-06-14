<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    use SoftDeletes;

    protected $dates=['deleted_at']; 
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login','password','role_id', 'firstname', 'lastname','email', 'langue',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function repesentations(){
     
     return $this->hasMany('App\Representation')->withPivot('places');

    }

    public function role(){
     
     return $this->belongsTo('App\Role');

    }


}
