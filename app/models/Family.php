<?php

class Family extends \Eloquent {
	protected $fillable = [];
	protected $table = 'families';

	public function product()
    {
        return $this->hasOne('Product');
    }
}