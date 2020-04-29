<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction_detail extends Model
{
    protected $table = 'transaction_detail';
    protected $fillable = [
      'transaction_id',
      'category_id',
      'sub_category_id',
      'product_name',
      'product_price',
      'quantity',
      'total',
      'status',
    ];
}
