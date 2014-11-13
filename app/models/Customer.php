<?php

class Customer extends \Eloquent {
	protected $fillable = [];
	protected $table = 'customers';

	public function products_rejects()
    {
        return $this->hasMany('ProductReject');
    }

 	public function price_list()
    {
        return $this->hasMany('PriceList');
    }
}