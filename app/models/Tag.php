<?php

class Tag extends Eloquent 
{
	protected $table = 'tags';

	public function post() 
	{
		return $this->belongsToMany('Post');
	}
}