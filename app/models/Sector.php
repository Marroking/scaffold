<?php

class Sector extends \Eloquent {
	protected $fillable = [];
	protected $table = 'sectors';

	public function product()
    {
        return $this->hasOne('Product');
    }
}