<?php

class Posts extends \Eloquent {
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

    static $postRule = ['title'=>'required', 'content'=>'required'];
}