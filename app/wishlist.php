<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    protected $table = 'wishlist';
    protected $fillable = [
      'user_id',
    ];
}
