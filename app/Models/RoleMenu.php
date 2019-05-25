<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleMenu extends Model
{
    protected $table = 'role_menus';
    protected $primaryKey = 'role_menu_id';
    protected $fillable = [
        'menu_id', 'role_id'
    ];

    public $timestamps = true;

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'role_id', 'role_id');
    }

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu', 'menu_id', 'menu_id');
    }
}
