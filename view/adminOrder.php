<h2>Customer orders:</h2><br><br>
<?php


$conn = Db::getConnection();
$b = new Book;
$query = $conn->prepare("select customers.*, order_items.* from customers join order_items on order_items.customer_id = customers.id");
$query->execute();
$res = [];
while ($rw=$query->fetch(PDO::FETCH_OBJ)) {
	$res[] = $rw;
}

if(!isset($_GET['order'])){
	?>
	<table border=1 class="order">
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Date</th>
			<th>Order</th>
		</tr>
	<?php
	$i = 1;
	foreach ($res as $r) {
		?>
		<tr>
			<td><a href='<?=FILE_PATH?>/?mvcc=adminOrder&mvcm=adminOrder&order=<?=$r->id?>'><?=$i?></a> </td>
			<td><a href='<?=FILE_PATH?>/?mvcc=adminOrder&mvcm=adminOrder&order=<?=$r->id?>'><?=$r->first_name." ".$r->last_name ?></a></td>
			<td><a href='<?=FILE_PATH?>/?mvcc=adminOrder&mvcm=adminOrder&order=<?=$r->id?>'><?=$r->date?></a>  </td>
			<td class="text-center"><a href='<?=FILE_PATH?>/?mvcc=adminOrder&mvcm=adminOrder&order=<?=$r->id?>'><?=$r->id?> </a></td>
		</tr>
		<?php
		$i++;
	}
	?>
	</table>
	<?php

}

elseif (isset($_GET['order'])) {
	$order_id = $_GET['order'];
	$i = new Items;
	$c = new Customer;
	$order = $i->get(" id = {$order_id}");
	$customer = $c->get(" id = {$order->customer_id}");
	$items = unserialize($order->items);

	?>
	<table border=1>
		<tr><th>First name	</th><td><?=$customer->first_name?>	</td></tr>
		<tr><th>Last name	</th><td><?=$customer->last_name?>	</td></tr>
		<tr><th>Address		</th><td><?=$customer->address?>	</td></tr>
		<tr><th>City		</th><td><?=$customer->city?>		</td></tr>
		<tr><th>State		</th><td><?=$customer->state?>		</td></tr>
		<tr><th>Zip			</th><td><?=$customer->zip?>		</td></tr>
		<tr><th>Country		</th><td><?=$customer->country?>	</td></tr>

	</table>
	<br><br><br>
	
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
			<td class='text-center'><?=$quantity?></td>
			<td class='text-center'><?=($book->price * $quantity)?>&euro;</td>
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
	<br><br><br>
	<a href='<?=FILE_PATH?>/?mvcc=adminOrder&mvcm=adminOrder'>Back</a>
	<?php
}