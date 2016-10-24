<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public $primaryKey = 'username';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'firstName', 'lastName'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $login_validation_rules = [
        'username' => 'required|exists:users',
        'password' => 'required'
    ];

    public static $create_validation_rules = [
        'username' => 'required|unique:users',
        'password' => 'required'
    ];    
}
