<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'menu_id';
    protected $fillable = [
        'label', 'url', 'order_num', 'parent_id'
    ];

    public $timestamps = true;

    public function Users()
    {
        return $this->belongsToMany('App\Models\User', 'user_menus', 'menu_id', 'user_id');
    }

    public function roleMenus()
    {
        return $this->hasMany('App\Models\RoleMenu', 'menu_id', 'menu_id');
    }

    public function userMenus()
    {
        return $this->hasMany('App\Models\UserMenu', 'menu_id', 'menu_id');
    }
}
