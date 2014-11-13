<?php

class PriceList extends \Eloquent {
	protected $fillable = [];
	protected $table = 'price_lists';

	public function customer()
    {
        return $this->belongsTo('Customer');
    }
}