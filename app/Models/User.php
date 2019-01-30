<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function roles(){
        return $this->belongsToMany(Role::class, 'users_roles', 'user_id', 'role_id');
    }

    private $roles = null;

    public function hasRole($role){
        if($this->roles == null) $this->roles= $this->roles()->all();
        foreach ($this->roles as $r){
            if($r->name == $role) return true;
        }
        return false;
    }
}
