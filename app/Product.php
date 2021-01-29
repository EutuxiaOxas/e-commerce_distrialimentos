<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
		'title',
		'slug',
		'description',
		'sku',
		'image',
		'bar_code',
		'available_stock',
		'iva_id',
		'category_id',
		'detail_price',
		'wholesale_price',
		'big_wholesale_price',
		'amount_min_big_wholesale',
		'packaging_id',
		'units_packaging',
		'discount',
		
    ];


    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }

    public function images()
    {
    	return $this->hasMany('App\ProductImage', 'product_id');
	}
	
	public function iva()
	{
		return $this->belongsTo('App\Iva', 'iva_id');
	}

	public function packaging()
	{
		return $this->belongsTo('App\Packaging', 'packaging_id');
	}
}
