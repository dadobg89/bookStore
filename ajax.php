<?php

require_once 'config.php';
// Trazenje knjiga ako se unese podatak u search box
if (isset($_GET['srch_str'])) {
	$search = $_GET['srch_str'];
	$books = Book::getAll(" where title like '%{$search}%' or author like '%{$search}%' ");
	ob_start();
	foreach ($books as $book) {
		if (strlen($book->title) >= 30) {
			$book->title = substr($book->title, 0, 27);
			$book->title .= '...';
		}
		?>
		<article class='books'>
			<a href='<?=FILE_PATH?>?mvcc=book&mvcm=book&book_id=<?=$book->id?>'>
				<img src='<?=FILE_PATH?>/images/books/<?=$book->image?>'><br>
				<?=$book->title?>
			</a>
		</article>
		<?php
	}
	$output = ob_get_clean();
	echo $output;
}