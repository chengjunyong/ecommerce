<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscription_list extends Model
{
    protected $table = 'subscription_list';
    protected $fillable = [
      'email',
      'sended',
    ];
}
