<?php

class Post extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'author' => 'required',
		'body' => 'required'
	);
}
