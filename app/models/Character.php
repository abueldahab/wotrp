<?php

class Character extends Eloquent 
{
	protected $table = 'characters';

	public function user()
	{
		return $this->hasOne('User');
	}

	public function getThreads()
	{
		
	}
}