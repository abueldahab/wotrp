<?php

class Post extends Eloquent 
{
	protected $table = 'posts';

	public function tag()
	{
		return $this->belongsToMany('Tag');
	}

	public function thread()
	{
		return $this->belongsTo('Thread');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function character()
	{
		return $this->belongsTo('Character');
	}

	public function editor() 
	{
		return $this->bleongsTo('User', 'editor');
	}
}