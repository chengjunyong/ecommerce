<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    protected $table = 'template';
    protected $fillable = [
      'title',
      'folder',
      'fullpath',
    ];
}
