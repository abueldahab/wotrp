<?php

class Forum extends Eloquent 
{
	protected $table = 'forums';

	public function thread()
	{
		return $this->hasMany('Thread');
	}
}