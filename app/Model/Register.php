<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Register extends Model implements AuthenticatableContract{
    protected $table = 'users';
    protected $primaryKey = 'id';
    use Authenticatable;
    
    protected $fillable = [
        'name', 'email', 'password','phone',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
