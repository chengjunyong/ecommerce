<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist_detail extends Model
{
    protected $table = 'wishlist_detail';
    protected $fillable = [
      'wishlist_id',
      'product_id',
      'quantity'
    ];
}
