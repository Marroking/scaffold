<?php

class Product extends \Eloquent {
	protected $fillable = [];
	protected $table = 'products';


    public function family()
    {
        return $this->belongsTo('Family');
    }

    public function sector()
    {
        return $this->belongsTo('Sector');
    }

	public function inventory()
    {
        return $this->belongsTo('Inventory');
    }

    public function product_price_list()
    {
        return $this->hasOne('ProductPriceList');
    }

    public function incidence_product()
    {
        return $this->hasOne('IncidenceProduct');
    }
}