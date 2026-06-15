<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function products(){
        return $this->hasOne(Product::class);
    }
}
