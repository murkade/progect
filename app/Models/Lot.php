<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }

    public function rates(){
        return $this->hasMany(Rate::class, 'lot_id');
    }
}
