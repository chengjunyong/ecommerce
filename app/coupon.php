<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    protected $table = 'coupon';
     protected $fillable = [
      'name',
      'code',
      'amount',
      'percent',
      'date_start',
      'date_end',
      'quantity',
      'per_customer',
      'active',
      'user_exist',
      'category_id',
      'subcategory_id',
      'minimum_spend'
    ];
}
