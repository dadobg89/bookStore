<?php

class cartController{
	public function getView($view){
		if (!file_exists("view/{$view}.php")) {
			require_once "view/{$view}.php";
		}
	}

	public function cart(){
		require_once 'view/header.php';
		require_once 'view/cart.php';
		require_once 'view/footer.php';
		//echo 'No index implemented';
	}
}