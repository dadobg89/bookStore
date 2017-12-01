<?php

class loginController{
	public function getView($view){
		if (!file_exists("view/{$view}.php")) {
			require_once "view/{$view}.php";
		}
	}

	public function login(){
		require_once 'view/header.php';
		require_once 'view/login.php';
		require_once 'view/footer.php';
		//echo 'No index implemented';
	}
}