<?php

define("FILE_PATH", "http://127.0.0.1/zavrsni_rad/bookStoreOOP/");

function __autoload($class){
	if (file_exists("model/{$class}.php")) {
		require_once "model/{$class}.php";
	} else
	if (file_exists("controller/{$class}.php")) {
		require_once "controller/{$class}.php";
	}
}

// http://127.0.0.1/zavrsni_rad/bookStoreOOP/index.php