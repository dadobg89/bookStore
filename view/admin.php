<?php
if (($_SESSION['user']->role != "admin") && ($_SESSION['user']->role != "superadmin")) {
	header("Location: ".FILE_PATH."/index.php");
}
if (isset($_POST['search'])) {
	$search = $_POST['search'];
	$books = Book::getAll(" where title like '%{$search}%' or author like '%{$search}%' or description like '%{$search}%' ");
	if (count($books) < 1) {
		echo "Sorry but we haven't nothing like that &nbsp; <strong>) :</strong>";
	}
} else{
$books = isset($_GET['cat_id']) ? Book::getAll(" where category_id = {$_GET['cat_id']}") : Book::getAll('where stock <= 5');
if(count($books) == 0) echo "Sorry but we haven't nothing like that &nbsp; <strong>) :</strong>";
}
?>
<div class='container-fluid'>
<?php
foreach ($books as $book) {
	?>
	<article class='books'>
		<a href='<?=FILE_PATH?>?mvcc=adminBook&mvcm=adminBook&book_id=<?=$book->id?>'><img src='<?=FILE_PATH?>/images/books/<?=$book->image?>.jpg'><p style='text-align:center;'><strong>Stock: &nbsp;<?=$book->stock?></strong></p></a>
	</article>
	<?php
}
?>
</div> <!-- container-fluid --> 
<?php

/*================================ Promena user statusa =========================================*/

if($_SESSION['user']->role == 'superadmin'){
$conn = Db::getConnection();

?>

<h2>Change user status</h2><br>
<form action="<?php echo FILE_PATH?>/?mvcc=admin&mvcm=admin" method="post">
	<input type="text" name="user_name" placeholder="Email">
	<input type="submit" name="submit" value="Find">

<?php
if(isset($_POST['user_name'])){
	$query = $conn->prepare("select * from users where email = '{$_POST['user_name']}'");
	$query->execute();
	$rw=$query->fetch(PDO::FETCH_OBJ);
	if ($rw != false) {
		$_SESSION['role'] = $rw;
	}
}
	if(isset($_SESSION['role'])){
		$id = $_SESSION['role']->id;
		$q = $conn->prepare("select * from users where id = {$id}");
		$q->execute();
		$u=$q->fetch(PDO::FETCH_OBJ);
		?>
		<br><br>
		<select onchange="window.location='?mvcc=admin&mvcm=admin&role='+this.value" name="role">
			<option value="1">Select role</option>
			<option value="user">User</option>
			<option value="admin">Admin</option>
		</select>
		<?php
		$role = isset($_GET['role']) ? $_GET['role'] : $u->role;
		$q = $conn->prepare("update users set role = '{$role}' where id = {$u->id}");
		$res = $q->execute();

		//if($res == true) header("Location: ".FILE_PATH."/?mvcc=admin&mvcm=admin");
		echo "<br><br>";
		echo $u->email . " <br>Status: " . $u->role;
	}
?>


	<input type="hidden" name="user">
</form>
<?php
}
//<input type="text" name="role" value="<?=$_SESSION['role']->role"> 

//