<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function author(){
        return $this->belongsTo(User::class);
    }

    public function lot(){
        return $this->belongsTo(Lot::class);
    }
}
