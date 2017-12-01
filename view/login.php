<?php
$c = new Customer;
$u = new User;
if (isset($_SESSION['error'])) {
	foreach ($_SESSION['error'] as $key => $value) {
		echo "Your " . $value. " isn't good. Please try again <strong>( :</strong><br>";
	}
}
if (isset($_SESSION['user'])) {
	$customer = $c->get(" user_id = {$_SESSION['user']->id}");
	$user = $u->get(" id = {$_SESSION['user']->id}");
}
$id 		= isset($customer)? $customer->id : "";
$first_name = isset($customer)? $customer->first_name : "";
$last_name 	= isset($customer)? $customer->last_name : "";
$email 		= isset($user)? $user->email : "";
$password 	= isset($user)? $user->password : "";
$rpt_password=isset($user)? $user->password : "";
$address 	= isset($customer)? $customer->address : "";
$city 		= isset($customer)? $customer->city : "";
$zip 		= isset($customer)? $customer->zip : "";
$state 		= isset($customer)? $customer->state : "";
$country 	= isset($customer)? $customer->country : "";
$submit		= isset($_SESSION['user'])? "Edit" : "Sign up";
$title		= isset($_SESSION['user'])? "Your account" : "Registry";
?>
<!--	 Registry	  -->
<div class="form">
<h2 class="text-center"><?=$title?></h2>
<form action="process.php" method="post" id="reg">
	<div>
		<table>
			<tr>
				<th><label for="first">First name &nbsp; </label></th>
				<td><input type="text" name="first" id="first" value="<?=$first_name?>"></td>
			</tr>
			<tr>
				<th><label for="last">Last name &nbsp; </label></th>
				<td><input type="text" name="last" id="last" value="<?=$last_name?>"></td>
			</tr>
			<tr>
				<th><label for="email">Email </label></th>
				<td><input type="text" name="email" id="email" value="<?=$email?>"></td>
			</tr>
			<?php
			if (!isset($_SESSION['user'])) {
				?>
				<tr>
					<th><label for="password">Password </label></th>
					<td><input type="password" name="password" id="password" value="<?=$password?>"></td>
				</tr>
				<tr>
					<th><label for="rpt_password">Repeat password &nbsp; </label></th>
					<td><input type="password" name="rpt_password" id="rpt_pass" value="<?=$rpt_password?>"></td>
				</tr>
				<?php
			}
			?>
		</table>
	</div>
	<div>
		<table>
			<tr>
				<th><label for="address">Address &nbsp; </label></th>
				<td><input type="text" name="address" id="address" value="<?=$address?>"></td>
			</tr>
			<tr>
				<th><label for="city">City </label></th>
				<td><input type="text" name="city" id="city" value="<?=$city?>"></td>
			</tr>
			<tr>
				<th><label for="zip">Zip #</label></th>
				<td><input type="text" name="zip" id="zip" value="<?=$zip?>"></td>
			</tr>
			<tr>
				<th><label for="state">State </label></th>
				<td><input type="text" name="state" id="state" value="<?=$state?>"></td>
			</tr>
			<tr>
				<th><label for="country">Country </label></th>
				<td><input type="text" name="country" id="country" value="<?=$country?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="form" value="reg"></td>
				<input type="hidden" name="id" value="<?=$id?>">
				<td><button type="submit" name="submit" value="<?=$submit?>"><?=$submit?></button></td>
			</tr>
		</table>
	</div>
</form>
</div>

<?php
if (!isset($_SESSION['user'])) {
	?>
	<!-- 	Login	 -->
	<div style="clear: both;"><br>
	<hr style="border: 13px solid #E2E0E5;">
	<h2 class="text-center">Login</h2><br>
	<form action="process.php" method="post">
		<tr>
			<th><label for="email">Email </label></th>
			<td><input type="text" name="email" id="email" value=""></td>
		</tr>
		<tr>
			<th><label for="password">Password </label></th>
			<td><input type="password" name="password" id="password" value=""></td>
		</tr>
		<tr>
			<td><input type="hidden" name="form" value="log"></td>
			<td><input type="submit" value="Sign in"></td>
		</tr>
	</form>
	</div>
	<?php
}

if (isset($_SESSION['error'])) {
	unset($_SESSION['error']);
}