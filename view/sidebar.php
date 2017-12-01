</main>
<aside>
	<h2>Categories</h2>
	<?php
	$category = new Category;
	$categories = $category->getAll();
	if (isset($_SESSION['user'])) {
		if (($_SESSION['user']->role == 'superadmin') || ($_SESSION['user']->role == 'admin')) {
			$value = "/?mvcc=admin&mvcm=admin";
		} elseif ($_SESSION['user']->role == 'user'){
			$value = "/?mvcc=home&mvcm=home";
		}
	} else {
		$value = "/?mvcc=home&mvcm=home";
	}

	foreach ($categories as $category) {
		?>
		<article id="category">
			<ul style="list-style:none; margin:0; padding:0;">
				<li><a href="<?=FILE_PATH.$value?>&cat_id=<?=$category->id?>"><?=ucfirst($category->name)?></a></li>
			</ul>
		</article> <!-- end category -->
		<?php
	}
	?>
	<article id="tags">
		<h2></h2>
	</article> <!-- end tags -->
</aside>