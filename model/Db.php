<?php

class Db extends PDO{
	private static $conn = null;
	public static function getConnection(){
		if (!self::$conn)
			self::$conn = new PDO("mysql:host=localhost;dbname=bookstore;", "root", "misa");
		return self::$conn;
	}
}