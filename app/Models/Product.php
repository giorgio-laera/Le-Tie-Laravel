<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

   protected $fillable = [
      'name',
      'description',
      'type_id',
      'path',
      'alt_text'
   ];
   public function type(){
    return $this->belongsTo(Type::class);
   }
   public function categories(){
    return $this->belongsToMany(Category::class);
   }
    public function image(){
        return $this->hasOne(Image::class);
    }
}
