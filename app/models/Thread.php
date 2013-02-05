<?php

class Thread extends Eloquent 
{
	protected $table = 'threads';

	public function forum()
	{
		return $this->belongsTo('Forum');
	}

	public function post()
	{
		return $this->hasMany('Post');
	}	

	public function creator() 
	{
		return $this->belongsTo('User', 'creator');
	}

	public function lastPoster()
	{
		return $this->belongsTo('User', 'last_poster');
	}
}