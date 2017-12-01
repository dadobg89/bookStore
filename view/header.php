<?php
$userLinks = Links::getAll(' limit 3');
$adminLinks = Links::getAll(' where link like "%admin%"');
$action = FILE_PATH."/?mvcc=home&mvcm=home";
if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
	$customer = new Customer;
	$customer = $customer->get(" user_id = {$user->id}");
	if (isset($user)) {
		if ($user->role == 'user') {
			$userName = $customer->first_name;
		}
		elseif($user->role == 'admin'){
			$userName = "Admin" . " &nbsp; " . $user->email;
			$action = FILE_PATH."/?mvcc=admin&mvcm=admin";
		}
		elseif($user->role == 'superadmin'){
			$userName = "Superadmin" . " &nbsp; " . $user->email;
			$action = FILE_PATH."/?mvcc=admin&mvcm=admin";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?=FILE_PATH?>/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="<?=FILE_PATH?>/js/main.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="text/css" href="<?=FILE_PATH?>/images/layout/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?=FILE_PATH?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=FILE_PATH?>/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:200i,400,600i,800i&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="<?=FILE_PATH?>/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
	<title>Book Store</title>
</head>
<body>
<div id="wrapper">
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">

					<?php // Ispis korisnikovog imena
					if (isset($userName)) {
						echo "Hello " . $userName . " <strong> ( :</strong>";
					}
					?>

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					    <?php if(isset($user)) echo rtrim($user->email,'.rs')?>
					</button>
					<a class="navbar-brand" href="<?php echo FILE_PATH ?>/index.php"><img alt="logo" src="<?php echo FILE_PATH ?>/images/layout/small.file"></a>
				</div> <!-- navbar-header -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<?php
					if (!$_GET) {
						?> <form id="search" class="navbar-form navbar-left" action="<?=$action?>" method="post">
					        <div class="form-group links ui-widget">
					          	<input type="text" id="tags" name="search" class="form-control" placeholder="Search book">
						        <input type="submit" id="submit" value="Search" class="btn btn-default">
					        </div>
					    </form> <?php
					}
					?>
					<ul class="nav navbar-nav navbar-right">
												<!-- Ovde dolaze linkovi  -->
						<?php
						if(!isset($user)){
							foreach ($userLinks as $userLink) {
								?> <li class="links"><a href="<?php echo FILE_PATH . $userLink->link ?>"><?php echo ucfirst($userLink->name);?><span class="sr-only">(current)</span></a></li> 
								<?php
							}
						}
						 elseif ($user->role == 'user') {
							?> <li class="links"><a href="<?=FILE_PATH?>/process.php?logout">Logout</a></li>
								<li class="links"><a href="<?=FILE_PATH?>/?mvcc=cart&mvcm=cart">Cart</a></li> <?php
							foreach ($userLinks as $userLink) {
								?> <li class="links"><a href="<?php echo FILE_PATH . $userLink->link ?>"><?php echo ucfirst($userLink->name);?><span class="sr-only">(current)</span></a></li> 
								<?php
							}
						} elseif ($user->role == 'admin') {
							?> <li class="links"><a href="<?=FILE_PATH?>/process.php?logout">Logout</a></li> <?php
							foreach ($adminLinks as $adminLink) {
								?> <li class="links"><a href="<?php echo FILE_PATH . $adminLink->link ?>"><?php echo ucfirst($adminLink->name);?><span class="sr-only">(current)</span></a></li> 
								<?php
							}
						} elseif ($user->role == 'superadmin') {
							?> <li class="links"><a href="<?=FILE_PATH?>/process.php?logout">Logout</a></li> <?php
							foreach ($adminLinks as $adminLink) {
								?> <li class="links"><a href="<?php echo FILE_PATH . $adminLink->link ?>"><?php echo ucfirst($adminLink->name);?><span class="sr-only">(current)</span></a></li> 
								<?php
							}
						}
						?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav> <!-- navbar navbar-default -->
		<div class="hero">
	        <img src="<?php echo FILE_PATH ?>/images/layout/hero.png">
    	</div> <!-- .hero -->
	</header>
	<main>