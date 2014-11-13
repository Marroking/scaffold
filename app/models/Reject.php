<?php

class Reject extends \Eloquent {
	protected $fillable = [];
	protected $table = 'rejects';

  public function incidence_product()
    {
        return $this->hasOne('IncidenceProduct');
    }
}