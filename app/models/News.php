<?php

class News extends Eloquent 
{
	protected $table = 'news';

	public function thread()
	{
		return $this->hasOne('Thread');
	}
}