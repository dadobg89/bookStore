<?php
class Message extends Active{
	public $id;
	public $email;
	public $title;
	public $message;
	public static $key = 'id';
	public static $table = 'messages';
	
}