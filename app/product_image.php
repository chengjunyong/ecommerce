<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    protected $table = 'product_image';
    protected $fillable = [
      'product_id',
      'image_type',
      'path'
    ];
}
