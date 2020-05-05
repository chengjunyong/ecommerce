<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart_detail extends Model
{
    protected $table = 'cart_detail';
    protected $fillable = [
      'cart_id',
      'product_id',
      'quantity',
      'completed'
    ];
}
