<?php

class SolveReject extends \Eloquent {
	protected $fillable = [];
	protected $table = 'solve_rejects';

	public function user()
    {
        return $this->belongsTo('User');
    }
}