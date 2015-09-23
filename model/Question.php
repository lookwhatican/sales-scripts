<?php

class Question extends Model
{
	public $id;
	public $text;

	protected static $table = 'questions';
}