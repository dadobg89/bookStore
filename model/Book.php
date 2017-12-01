<?php
class Book extends Active{
	public $id;
	public $title;
	public $author;
	public $price;
	public $description;
	public $image;
	public $category_id;
	public $stock;
	public static $key = 'id';
	public static $table = 'books';
	
}