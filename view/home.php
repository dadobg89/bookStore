<?php
require_once 'config.php';
// Trazenje knjiga ako se unese podatak u search box
if (isset($_POST['search'])) {
	$search = $_POST['search'];
	$books = Book::getAll(" where title like '%{$search}%' or author like '%{$search}%' ");
}

if (isset($_GET['srch_str'])) {
	$search = $_GET['srch_str'];
	$books = Book::getAll(" where title like '%{$search}%' or author like '%{$search}%' ");
}

// Izlistavanje knjiga po trazenoj kategoriji
elseif (isset($_GET['cat_id'])) {
	$cat_id = $_GET['cat_id'];
	$books = Book::getAll(" where category_id = {$cat_id}");
}

// Prikazivanje 15 random knjiga kada se pokrene aplikacija
else{
	$books = Book::getAll('where stock >= 1 order by rand() limit 15');
}

// Prikaz knjiga po jednom od kriterijuma
?> <div class='container-fluid container-books'> <?php


if (count($books) < 1) {
	echo "Sorry but we haven't nothing like that &nbsp; <b>) :</b>";
}
foreach ($books as $book) {
	if (strlen($book->title) > 30) {
		$book->title = substr($book->title, 0, 27);
		$book->title .= '...';
	}
	?>
	<article class='books'>
		<a href='<?=FILE_PATH?>?mvcc=book&mvcm=book&book_id=<?=$book->id?>'>
			<img src='images/books/<?=$book->image?>.jpg'><br>
			<?=$book->title?>
		</a>
	</article>
	<?php
}
?>
</div> <!-- container-fluid -->
<?php

