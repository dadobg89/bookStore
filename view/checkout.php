<?php 
require_once 'view/header.php';
$user = $_SESSION['user'];
$c = new Customer;
$customer = $c->get(" user_id = {$user->id}");
$i = new Items;
$items = $i->getAll(" where customer_id = {$customer->id}");
$b = new Book;

// Prikaz svih korisnikovih porudzbina
if(!isset($_GET['order'])){
	?>
	<table border=1 class='order'>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Date</th>
		<th>Order</th>
	</tr>
	<?php
	$i = 1;
	foreach ($items as $item) {
		?>
		<tr>
			<td><a href='<?=FILE_PATH?>/?mvcc=checkout&mvcm=checkout&order=<?=$item->id?>'><?=$i?></a></td>
			<td><a href='<?=FILE_PATH?>/?mvcc=checkout&mvcm=checkout&order=<?=$item->id?>'><?=$customer->first_name." ".$customer->last_name ?></a></td>
			<td><a href='<?=FILE_PATH?>/?mvcc=checkout&mvcm=checkout&order=<?=$item->id?>'><?=$item->date?></a></td>
			<td class='text-center'><a href='<?=FILE_PATH?>/?mvcc=checkout&mvcm=checkout&order=<?=$item->id?>'><?=$item->id?> </a></td>
		</tr>
		<?php
		$i++;
	}
	?>
	</table>
	<?php
}

// Prikaz odabrane porudzbine sa adresom za dostavu i porucenim artiklima
elseif (isset($_GET['order'])) {
	$order_id = $_GET['order'];
	$i = new Items;
	$c = new Customer;
	$order = $i->get(" id = {$order_id}");
	$customer = $c->get(" id = {$order->customer_id}");
	$items = unserialize($order->items);

	?>
	<h2>Delivery address</h2>
	<br>
	<table border=1>
		<tr>
			<th>First name</th>
			<td><?=$customer->first_name?></td>
		</tr>
		<tr>
			<th>Last name</th>
			<td><?=$customer->last_name?></td>
		</tr>
		<tr>
			<th>Address</th>
			<td><?=$customer->address?></td>
		</tr>
		<tr>
			<th>City</th>
			<td><?=$customer->city?></td>
		</tr>
		<tr>
			<th>State</th>
			<td><?=$customer->state?></td>
		</tr>
		<tr>
			<th>Zip</th>
			<td><?=$customer->zip?></td>
		</tr>
		<tr>
			<th>Country	</th>
			<td><?=$customer->country?></td>
		</tr>

	</table>

	<br><br><br>
	<h2>Ordered books</h2>
	<br>
	<table border=1>
		<tr>
			<th>#</th>
			<th>Author</th>
			<th>Title</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total price</th> 
		</tr>
		<?php
		$i = 1;
		$total_price = "";
		foreach ($items as $book_id => $quantity) {
			$book = $b->get(" id = {$book_id}");
			?>
			<tr>
				<td><?=$i?></td>
				<td><?=$book->author?></td>
				<td><?=$book->title?></td>
				<td><?=$book->price?>&euro;</td>
				<td class="text-center"><?=$quantity?></td>
				<td class="text-center"><?=($book->price * $quantity)?>&euro;</td>
			</tr>
			<?php
			$total_price += ($book->price * $quantity);
			$i++;
		}
		?>
		<tr>
			<th colspan='5'>Summary</th>
			<td class='text-center'><strong><?=$total_price?>&euro;</strong></td>
		</tr>
	</table>
	<br><br>
	<a href='<?=FILE_PATH?>/?mvcc=checkout&mvcm=checkout'>Back</a>
	<?php
}
unset($_SESSION['cart']);
require_once 'view/footer.php';
	