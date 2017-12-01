<?php
$book = new Book;
if (!isset($_SESSION['user'])) {
	header("Location: {FILE_PATH}?mvcc=login&mvcm=login");
}
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}
if(!isset($_POST['book_id']) && !isset($_POST['quantity']) && empty($_SESSION['cart'])){
	echo 'Your cart is empty <br> <a style="text-align:center;" href="'.FILE_PATH.'/?mvcc=checkout&mvcm=checkout">My orders</a>';return;
}
elseif(isset($_POST['book_id']) && isset($_POST['quantity'])){
	if (isset($_SESSION['cart'][$_POST['book_id']])) {
		$_SESSION['cart'][$_POST['book_id']] += $_POST['quantity'];
	}else{
		$_SESSION['cart'][$_POST['book_id']] = $_POST['quantity'];
	}
	if ($_SESSION['cart'][$_POST['book_id']] < 1) {
		unset($_SESSION['cart'][$_POST['book_id']]);
	}
}
$book_id = array_keys($_SESSION['cart']);
$books_id = implode(',', $book_id);

if ($books_id > 0) {
	?>

	<table border="1">
	<tr>
		<th>Title</th>
		<th>#</th>
		<th>Price</th>
	</tr>
	<?php
		$res = $book->getAll(" where id in ({$books_id})");
	$total_price = "";
	foreach ($res as $book) {
		$quantity = $_SESSION['cart'][$book->id];
		$price = $book->price * $quantity;
		$total_price += $price;
		?>
		<tr>
			<td><a href="?mvcc=book&mvcm=book&book_id=<?=$book->id?>"> <?=$book->title?> </a></td>
			<td><?=$quantity?></td>
			<td><?=$price?>&euro;</td>
		</tr>
		<?php
	}
	?>
		<tr>
			<th colspan="3" style="background-color: #ABABAB;">&nbsp;</th>
		</tr>
		<tr>
			<th colspan="2">Total price:</th>
			<td><strong><?=$total_price?>&euro;</strong></td>
		</tr>
	</table>
	<a href="<?=FILE_PATH?>/process.php?buy">Buy</a>  &nbsp;
	<a href="<?=FILE_PATH?>/index.php">Continue-shopping</a>
	<a style="text-align:center;" href="<?=FILE_PATH?>/?mvcc=checkout&mvcm=checkout">My orders</a>
	<?php
} else {
	echo 'Your cart is empty <br> </table>  <a style="text-align:center;" href="'.FILE_PATH.'/?mvcc=checkout&mvcm=checkout">My orders</a>';return;
}

require_once 'footer.php';

