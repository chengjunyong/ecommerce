<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postcode extends Model
{
    protected $table = "postcode";
    protected $fillable = [
      'available',
    ];
}
