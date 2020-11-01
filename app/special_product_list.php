<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class special_product_list extends Model
{
  protected $table = 'special_product_list';
  protected $fillable = [
    'special_product_id',
    'product_id'
  ];
}
