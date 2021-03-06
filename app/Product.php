<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Variable;

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
		'vip_price',
		'amount_min_wholesale',
		'amount_min_vip',
		'unit_price',
		'brand_id',
		'isfeatured'
    ];


    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }

	public function brand()
    {
    	return $this->belongsTo('App\Brand', 'brand_id');
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

	public function cartDetail()
	{
		return $this->hasOne('App\CartDetail', 'product_id');
	}

	public function getPrice($type, $price) 
	{

		$value = '';

		if($type === 'USD') {
			$value = $price;
		}elseif($type === 'VES') {
			$dolarPrice = Variable::where('name', 'dolar')->first();
			$value = $price * $dolarPrice->value;
			$value = number_format($value, 0, ',', '.');
		}

		return $value;
	}
}
