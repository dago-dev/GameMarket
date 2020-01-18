<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable =['category',];

  public function products() //categoryにたいして、たくさんのproductが存在するため、複数形で書く
  {
    return $this->hasMany(Product::class);
  }
}
