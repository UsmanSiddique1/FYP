<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use GeniusTS\Roles\Traits\HasRoleAndPermission;
use GeniusTS\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Illuminate\Database\Eloquent\SoftDeletes;



class User extends Model implements AuthenticatableContract, CanResetPasswordContract,HasRoleAndPermissionContract{

    use Authenticatable, CanResetPassword , HasRoleAndPermission;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
