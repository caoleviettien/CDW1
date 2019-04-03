<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Login extends Model implements AuthenticatableContract{
    protected $table = 'users';
    protected $primaryKey = 'id';
    use Authenticatable;
}
