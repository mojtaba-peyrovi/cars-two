<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements Authenticatable
{

    protected $guard = [];
    use \Illuminate\Auth\Authenticatable;

    public function cars(){
        return $this->hasMany('App\Car');
    }

}
