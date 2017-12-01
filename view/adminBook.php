<?php
$book = new Book;
$c = new Category;
$book_id = isset($_GET['book_id'])? $_GET['book_id'] : "";

if (isset($_GET['book_id'])) {
	$book = $book->get(" id = {$book_id}");
	$category = $c->get(" id = {$book->category_id}");
}

$categories = $c->getAll();
$title = isset($_GET['book_id'])? $book->title : "";
$author = isset($_GET['book_id'])? $book->author : "";
$price = isset($_GET['book_id'])? $book->price : "";
$description = isset($_GET['book_id'])? $book->description : "";
$image = isset($_GET['book_id'])? $book->image : "";
$category_id = isset($_GET['book_id'])? $book->category_id : -1;
$category_name = isset($_GET['book_id'])? $category->name : "Select category";
$stock = isset($_GET['book_id'])? $book->stock : "";

?>
<br><br>
<form action="process.php" method="post" enctype="multipart/form-data">
	<p>
		<label for="title">Title: &nbsp;</label>
		<input type="text" name="title" value="<?=$title?>" id="title">
	</p>
	<br>
	<p>
		<label for="author">Author: &nbsp;</label>
		<input type="text" name="author" value="<?=$author?>" id="author">
	</p>
	<br>
	<p>
		<label for="price">Price: &nbsp;</label>
		<input type="number" step="any" name="price" value="<?=$price?>" id="price">
	</p>
	<br>
	<p>
		<label for="description">Description:</label><br>
		<textarea rows="6" cols="50" name="description" id="description"><?=$description?></textarea>
	</p>
	<br>
	<p>
		<label for="image">Image: &nbsp;</label>
		<input type="hidden" name="image" value="<?=$image?>">
		<input type="file" name="image" value="" id="image">
	</p>
	<br>
	<p>
		<label for="category">Category: &nbsp;</label>
		<select name="category">
			<option value="<?=$category_id?>"><?=$category_name?></option>
			<?php
			foreach ($categories as $category) {
				echo "<option value={$category->id}>".ucfirst($category->name)."</option>";
			}
			?>
		</select>
	</p>
	<br>
	<p>
		<label for="stock">Stock: &nbsp;</label>
		<input type="number" name="stock" id="stock" value="<?=$stock?>">
	</p>
	<br>
	<p>
		<input type="hidden" value="book" name="form">
		<input type="hidden" name="book_id" value="<?=$book_id?>">
		<input type="submit" value="Add" name="add">
		<input type="submit" value="Edit" name="edit">
		<input type="submit" value="Delete" name="delete">
	</p>
</form>
<a href="<?=FILE_PATH?>?mvcc=admin&mvcm=admin"">Back</a>