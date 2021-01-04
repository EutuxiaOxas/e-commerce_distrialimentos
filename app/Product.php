<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'title', 
    	'description', 
    	'unit_price', 
    	'image', 
    	'category_id', 
    	'slug', 
    	'packaging_price' , 
    	'amount',
    	'iva',
    	'sku',
    	'unit',
    	'packed',
        'available_stock',
        'discount',
        'in_stock',
        'out_stock',
    ];


    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }

    public function images()
    {
    	return $this->hasMany('App\ProductImage', 'product_id');
    }
}
