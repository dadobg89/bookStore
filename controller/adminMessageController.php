<?php

class adminMessageController{
	public function getView($view){
		if (!file_exists("view/{$view}.php")) {
			require_once "view/{$view}.php";
		}
	}

	public function adminMessage(){
		require_once 'view/header.php';
		require_once 'view/adminMessage.php';
		echo "</main>";
		require_once 'view/footer.php';
		//echo 'No index implemented';
	}
}