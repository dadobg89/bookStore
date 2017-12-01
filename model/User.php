<?php

class User extends Active{
	public $id;
	public $email;
	public $password;
	public $role;
	public static $key = 'id';
	public static $table = 'users';


	public function login($email,$password){
		$error = array();
		$email = $this->checkEmail($email) != false ? $email : array_push($error, "email and password");
		$password = $this->checkString($password) != false ? $password : array_push($error, "email and password");
		$user = $this->get(" email = '{$email}'");
		$valid_password = password_verify($password, $user->password);
		if ($valid_password === true) {
			$_SESSION['user'] = $user;
			if ($_SESSION['user']->role == 'user') header("Location: index.php");
			elseif (($_SESSION['user']->role == 'admin') || ($_SESSION['user']->role == 'superadmin')) header("Location: ".FILE_PATH."/?mvcc=admin&mvcm=admin");
		} else array_push($error, "email and password");
		
		if (!empty($error)) {
			$_SESSION['error'] = $error;
			header("Location: ".FILE_PATH."?mvcc=login&mvcm=login");
			die;
		}
	}

}