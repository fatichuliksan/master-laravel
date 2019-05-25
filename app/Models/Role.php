<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'role_id';
    protected $fillable = [
        'role_name',
    ];

    public $timestamps = true;


    public function roles()
    {
        return $this->belongsToMany('App\Models\User', 'user_roles', 'role_id', 'user_id');
    }

    public function roleMenus()
    {
        return $this->hasMany('App\Models\RoleMenu', 'role_id', 'role_id');
    }

    public function userRoles()
    {
        return $this->hasMany('App\Models\UserRole', 'role_id', 'role_id');
    }
}
