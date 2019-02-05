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

    public function receivedMessages(){
        return $this->hasMany(Message::class, 'receiver_id');
    }

    public function sentMessages(){
        return $this->hasMany(Message::class, 'user_id');
    }

    public function lots(){
        return $this->hasMany(Lot::class, 'author_id');
    }

    public function rates(){
        return $this->hasMany(Rate::class, 'user_id');
    }
}
