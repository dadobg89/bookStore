<?php
require_once 'config.php';
session_start();
if(isset($_POST['form'])){
switch ($_POST['form']) {
	case 'reg':
		$user = new User;
		$customer = new Customer;
		$error = array();

		// Podaci o user-u
		$user->email = $user->checkEmail($_POST['email']) != false ? $_POST['email'] : array_push($error, "email");
		$user->role = "user";

		// Podaci o customer-u
		$customer->first_name = $user->checkString($_POST['first']) != false ? $_POST['first'] : array_push($error, "first name");
		$customer->last_name = $user->checkString($_POST['last']) != false ? $_POST['last'] : array_push($error, "last name");
		$customer->address = $_POST['address'] ? $_POST['address'] : array_push($error, "address");
		$customer->city = $user->checkString($_POST['city']) != false ? $_POST['city'] : array_push($error, "city");
		$customer->state = $user->checkString($_POST['state']) != false ? $_POST['state'] : array_push($error, "state");
		$customer->zip = $user->checkString($_POST['zip']) != false ? $_POST['zip'] : array_push($error, "zip");
		$customer->country = $user->checkString($_POST['country']) != false ? $_POST['country'] : array_push($error, "country");
		
				/*========================= Registrovanje novog korisnika =========================================*/

		if ($_POST['submit'] == "Sign up") {
			$password = $user->checkString($_POST['password']) != false ? $_POST['password'] : array_push($error, "password");
			$rpt_password = $user->checkString($_POST['rpt_password']) != false ? $_POST['rpt_password'] : array_push($error, "repeat password");
			$password = ($password == $rpt_password) ? $password : array_push($error, "password and repeat password");
			if (!empty($error)) {
				$_SESSION['error'] = $error;
				header("Location: ".FILE_PATH."?mvcc=login&mvcm=login");
				die;
			}
			$user->password = password_hash($password, PASSWORD_DEFAULT);
			$customer->user_id = $user->insert();
			$customer->insert();
			$user = $user->get(" id = {$customer->user_id}");
			$_SESSION['user'] = $user;
			header("Location: index.php");
		}

				/*======================== Editovanje korisnikovih podataka ===========================================*/

		else if($_POST['submit'] == "Edit"){
			$customer->id = $_POST['id'];
			$user = $user->get(" id = {$_SESSION['user']->id}");
			$customer->user_id = $user->id;
			$user->email = $user->checkEmail($_POST['email']) != false ? $_POST['email'] : array_push($error, "email");
			if (!empty($error)) {
				$_SESSION['error'] = $error;
				header("Location: ".FILE_PATH."?mvcc=login&mvcm=login");
				die;
			}
			$user->update();
			$customer->update();
			header("Location: ".FILE_PATH."?mvcc=login&mvcm=login");
		}
		break;

				/*======================================= Logovanje korisnika ==========================================*/
	case 'log':
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user = new User;
		$user->login($email,$password);
		break;

				/*=========================== Dodavanje, Editivanje i Brisanje knjiga ==================================*/
	case 'book':
		$book = new Book;
		$book->id = isset($_POST['book_id'])? $_POST['book_id'] : "";
		$book->title = $_POST['title'];
		$book->author = $_POST['author'];
		$book->image = $_POST['image'];
		$book->price = $_POST['price'];
		$description = $_POST['description'];
		$book->description = str_replace("'", "\'", $description);
		if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
			move_uploaded_file($_FILES['image']['tmp_name'],"images/books/".$_FILES['image']['name']);
			$book->image = $_FILES['image']['name'];
		}
		$book->category_id = $_POST['category'];
		$book->stock = $_POST['stock'];
		
		if (isset($_POST['add'])) {
			$book->insert();
			header("Location: ".FILE_PATH."?mvcc=admin&mvcm=admin");
		}

		if (isset($_POST['edit'])) {
			$book->update();
			header("Location: ".FILE_PATH."?mvcc=admin&mvcm=admin");
		}
		if (isset($_POST['delete'])) {
			$book->delete($id);
			header("Location: ".FILE_PATH."?mvcc=admin&mvcm=admin");
		}
		break;


	case 'contact':
		$m = new Message;
		$m->email = isset($_POST['email']) ? $_POST['email'] : "";
		$m->title = isset($_POST['title']) ? $_POST['title'] : "";
		$m->message = isset($_POST['message']) ? $_POST['message'] : "";
		$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : "";

		$res = $m->insert();
		var_dump($res); die;
		//header("Location: ".FILE_PATH."?mvcc=contact&mvcm=contact");
		break;
	default:
		# code...
		break;
}
}

/* Brisanje korisnikove sesije */
if (isset($_GET['logout'])) {
	unset($_SESSION['user']);
	session_destroy();
	header("Location: ".FILE_PATH."/index.php");
}

/* Unos narucenih knjiga u bazu */
if (isset($_GET['buy'])) {
	$user_id = $_SESSION['user']->id;
	$customer = new Customer;
	$book = new Book;
	$item = new Items;
	$customer = $customer->get(" user_id = {$user_id}");

	$item->items = serialize($_SESSION['cart']);
	$item->date = date('Y-m-d H:i:s');
	$item->customer_id = $customer->id;

	$order_id = $item->insert();

	foreach ($_SESSION['cart'] as $key => $value) {
		$book = $book->get(" id = {$key}");
		$book->stock = $book->stock - $value;
		$book->update();
	}
	$_SESSION['order_id'] = $order_id;
	header("Location: ".FILE_PATH."/?mvcc=checkout&mvcm=checkout");
}

if (isset($_REQUEST['fn'])) {
	switch ($_POST['fn']) {
		case 'find':
			$s = $_POST['value'];
			$b = new Book;
			$res = $b->getAll(" where title like '%{$s}%' or author like '%{$s}%' or description like '%{$s}%' ");
			foreach ($res as $rw) {
				echo json_encode($s);
			}
			
			break;
		
		default:
			# code...
			break;
	}
}