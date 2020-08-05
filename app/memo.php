<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memo extends Model
{
    protected $table = "memo";
    protected $fillable = [
      'user_id',
      'memo',
      'completed',
    ];
}
