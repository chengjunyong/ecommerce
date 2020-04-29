<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voucher_transaction extends Model
{
    protected $table = 'voucher_transaction';
    protected $fillable = [
      'user_id',
      'transaction_id',
      'coupon_code_name',
      'discount_total',
      'coupon_code_id',
    ];
}
