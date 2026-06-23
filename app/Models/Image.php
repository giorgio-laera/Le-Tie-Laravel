<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path','alt_text'];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
