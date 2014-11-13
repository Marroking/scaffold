<?php

class IncidenceProduct extends \Eloquent {
	protected $fillable = [];
	protected $table = 'incidence_products';

	public function reject()
    {
        return $this->belongsTo('Reject');
    }

  public function product()
    {
        return $this->belongsTo('Product');
    }
}