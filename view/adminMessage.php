<?php


$m = new Message;
$messages = $m->getAll();
if (!isset($_GET['message'])) {
	echo "<h2>Customer messages:</h2><br><br>";
	$i = 1;
	?>
	<table border=1 class="order message">
		<tr>
			<th>#</th>
			<th>Email</th>
			<th>Date</th>
		</tr>
	<?php
	foreach ($messages as $message) {
		if(!isset($_GET['order'])){
			?>
			<tr>
				<td><a href='<?=FILE_PATH?>/?mvcc=adminMessage&mvcm=adminMessage&message=<?=$message->id?>'><?=$i?></a> </td>
				<td><a href='<?=FILE_PATH?>/?mvcc=adminMessage&mvcm=adminMessage&message=<?=$message->id?>'><?=$message->email?></a></td>
				<td><a href='<?=FILE_PATH?>/?mvcc=adminMessage&mvcm=adminMessage&message=<?=$message->id?>'><?=$message->date?></a>  </td>
			</tr>
			<?php
			$i++;
		}
	}
}
?>
</table>
<?php

if (isset($_GET['message'])) {
	echo "<h2>Customer message:</h2><br><br>";
	$message_id = $_GET['message'];
	$message = $m->get(" id = {$message_id}");
	?>
	<article class="message">
		<strong>Email:</strong>	<?=$message->email?><br><br>
		<strong>Title:</strong> <?=$message->title?><br><br>
		<p style="overflow: scroll;"><strong>Message:</strong><br><br> <?=$message->message?></p><br>
	</article>

	<a href='<?=FILE_PATH?>/?mvcc=adminMessage&mvcm=adminMessage' class="message">Back</a>
	<?php
}