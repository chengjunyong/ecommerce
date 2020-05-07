<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table = 'tag';
    protected $fillable = [
      'tag_name',
      'description',
      'subcategory_id',
      'deactived'
    ];
}
