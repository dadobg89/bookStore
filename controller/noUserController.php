<?php

class noUserController{
	
	public function getView($view){
		if (!file_exists("view/{$view}.php")) {
			require_once "view/{$view}.php";
		}
	}

	public function noUser(){
		require_once 'view/header.php';
		require_once 'view/noUser.php';
		require_once 'view/footer.php';
	}
}