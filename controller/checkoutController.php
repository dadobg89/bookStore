<?php

class checkoutController{
	
	public function getView($view){
		if (!file_exists("view/{$view}.php")) {
			require_once "view/{$view}.php";
		}
	}

	public function checkout(){
		require_once 'view/checkout.php';
	}
}