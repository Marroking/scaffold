<?php

class ProductPriceList extends \Eloquent {
	protected $fillable = [];
	protected $table = 'product_price_lists';

	public function product()
    {
        return $this->belongsTo('Product');
    }	
}