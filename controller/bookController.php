<?php

class bookController{
	public function getView($view){
		if (!file_exists("view/{$view}.php")) {
			require_once "view/{$view}.php";
		}
	}

	public function book(){
		require_once 'view/header.php';
		require_once 'view/book.php';
		require_once 'view/sidebar.php';
		require_once 'view/footer.php';
		//echo 'No index implemented';
	}
}