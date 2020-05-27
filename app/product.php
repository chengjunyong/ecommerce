<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $fillable = [
      'name',
      'description',
      'price',
      'stock',
      'sku',
      'weight',
      'brand',
      'maincategory_id',
      'category_id',
      'subcategory_id',
      'tag_id',
      'active'
    ];
}
