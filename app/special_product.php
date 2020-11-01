<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class special_product extends Model
{
    protected $table = 'special_product';
    protected $fillable = [
      'name',
      'active'
    ];
}
