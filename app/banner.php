<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table = 'banner';
    protected $fillable = [
      'type',
      'target_url',
      'img_path',
      'title1',
      'title2',
      'description',
      'status',
    ];
}
