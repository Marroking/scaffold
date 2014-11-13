<?php

class ProductReject extends \Eloquent {
	protected $fillable = [];
	protected $table = 'products_rejects';

	public function customer()
    {
        return $this->belongsTo('Customer');
    }	
}