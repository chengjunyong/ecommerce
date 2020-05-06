<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table = 'transaction';
    protected $fillable = [
      'user_id',
      'sub_total',
      'discount_total',
      'total',
      'status',
      'payment_type',
      'delivery_address',
      'phone_number'
    ];
}
