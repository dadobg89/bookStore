<?php

class homeController{
	public function getView($view){
		if (!file_exists("view/{$view}.php")) {
			include "view/{$view}.php";
		}
	}
	public function home(){
		require_once 'view/header.php';
		require_once 'view/home.php';
		require_once 'view/sidebar.php';
		require_once 'view/footer.php';
	}

}