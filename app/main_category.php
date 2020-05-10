<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class main_category extends Model
{
    protected $table = "main_category";
    protected $fillable = [
    	'name',
		'category_id',
		'description',
		'deactived',
    ];
}
