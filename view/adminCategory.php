<?php

$c = new Category;
$categories = $c->getAll();
if (isset($_GET['category_id'])) {
	$value = $c->get(" id = {$_GET['category_id']}");
}
if (isset($_POST['edit'])) {
	$c->id = $_GET['category_id'];
	$c->name = $_POST['edit_name'];
	$c->update();
	header("Location: ".FILE_PATH."?mvcc=adminCategory&mvcm=adminCategory");
}
if (isset($_POST['add'])) {
	$c->name = $_POST['category_name'];
	$c->insert();
	header("Location: ".FILE_PATH."?mvcc=adminCategory&mvcm=adminCategory");
}
if (isset($_POST['delete'])) {
	$c->delete($_GET['category_id']);
	header("Location: ".FILE_PATH."?mvcc=adminCategory&mvcm=adminCategory");
}
?>
<form action="#" method="post">
<h2>Edit category</h2>
<select onchange="window.location='?mvcc=adminCategory&mvcm=adminCategory&category_id='+this.value" name="category_id">
	<option>Select category</option>
<?php
	foreach ($categories as $category) {
		echo "<option value={$category->id}>".ucfirst($category->name)."</option>";
	}
?>
</select><br>
<input type="text" name="edit_name" value="<?php if(isset($value)) echo ucfirst($value->name); else echo ""; ?>">
<input type="submit" name="edit" value="Edit">
<input type="submit" name="delete" value="Delete"><br><br>



<h2>Add new category</h2>
<p>
	<label for="category">New category:</label>
	<input type="text" name="category_name" value=""><br>
	<input type="submit" name="add" value="Add">
</p>
</form>

