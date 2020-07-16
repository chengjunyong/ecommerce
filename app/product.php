<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $fillable = [
      'name',
      'description',
      'price',
      'stock',
      'sku',
      'weight',
      'brand',
      'maincategory_id',
      'category_id',
      'subcategory_id',
      'tag_id',
      'active',
      'on_sales',
      'on_sales_from',
      'on_sales_to',
      'on_sales_type',
      'on_sales_amount',
      'today_deal',
      'today_deal_from',
      'today_deal_to',
      'today_deal_type',
      'today_deal_amount',
    ];
}
