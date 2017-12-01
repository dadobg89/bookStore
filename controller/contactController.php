<?php

class contactController{
	
	public function getView($view){
		if (!file_exists("view/{$view}.php")) {
			require_once "view/{$view}.php";
		}
	}

	public function contact(){
		require_once 'view/header.php';
		require_once 'view/contact.php';
		echo "</main>";
		require_once 'view/footer.php';
	}
}