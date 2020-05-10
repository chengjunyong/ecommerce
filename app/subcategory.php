<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $table = 'subcategory';
    protected $fillable = [
      'subcategory_name',
      'category_id',
      'description',
      'deactived'
    ];
}
