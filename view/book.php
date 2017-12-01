<?php
$book = new Book;

if (isset($_GET['book_id'])) {
	$book_id = ($_GET['book_id']);
	$book = $book->get(" id = {$book_id}");
	$value = ($book->stock < 1) ? "0" : "1";
	?>


	<article class="book">
		<form action="<?=FILE_PATH?>/?mvcc=cart&mvcm=cart" method="post">
		    <div class="book_data">
		    	<p><strong>Title: &nbsp;</strong><?=$book->title?></p>
		    	<p><strong>By: &nbsp;</strong><?=$book->author?></p>
		    	<p><strong>Price: &nbsp;</strong><?=$book->price?>&euro;</p>
		    	<p><strong>Stock: &nbsp;</strong><?=$book->stock?></p>
		    	<p><strong>Quantity:</strong></p>
		    	<p>
					<input class="text-center" type="number" name="quantity" value="<?=$value?>" style="width:40px;" max="<?=$book->stock?>">
		    	</p>
		    	<?php if ($book->stock == 0) echo "We are sorry but we are sold out this book :("; ?>
		    </div>
		    <div class="book_data text-center">
		      <img src='images/books/<?=$book->image?>.jpg'>
		    </div>
		    <div class="desc">
		      <p><strong>Description:</strong></p>
		      <p><?php echo $book->description ?></p>
		    </div>
		    <div id="input">
				<input type="hidden" name="book_id" value="<?=$_GET['book_id']?>">
				<input type="hidden" name="form" value="cart">
				<?php
				if (isset($_SESSION['user'])) {
					echo "<input type='submit' value='Add'>";
				} else {
					echo "<span>Info: Must create account for buy a book</span>";
				}
				?>
			    <a href="<?=FILE_PATH?>/index.php">Back</a>
		    </div>
		</form>
	</article>
	<?php
}

