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
      'round_off',
      'final_total',
      'status',
      'payment_type',
      'shipping_type',
      'delivery_address',
      'mailing_address',
      'phone_number'
    ];
}
