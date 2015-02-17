<?php

class BaseModel extends \Eloquent {
	public $timestamps = false;
	public $guarded = ['id'];
}