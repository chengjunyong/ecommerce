<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address_book extends Model
{
  protected $table = 'address_book';
  protected $fillable = [
    'user_id',
    'name',
    'phone_number',
    'address',
    'state',
    'city',
    'postal_code',
    'default_shipping',
    'default_billing',
  ];
}
