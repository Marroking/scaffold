<?php

class Inventory extends \Eloquent {
	protected $fillable = [];
	protected $table = 'inventories';

	public function product()
    {
        return $this->hasMany('Product');
    }
}