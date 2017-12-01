<?php
$user = isset($_SESSION['user']) ? $_SESSION['user'] : "";
$email = isset($user->email) ? $user->email : "";
$user_id = isset($user->id) ? $user->id : "";
?>

<article class="contact">
	<form action="process.php" method="post">
		<table>
			<tr>
				<th><label for="email">Email &nbsp; </label></th>
				<td><input type="text" name="email" id="email" value="<?=$email?>" placeholder="Email" ></td>
			</tr>
			<tr>
				<th><label for="title">Title &nbsp; </label></th>
				<td><input type="text" name="title" id="title" placeholder="Title" ></td>
			</tr>
			<tr>
				<th><label for="message">Message &nbsp; </label></th>
				<td> <textarea id="message" rows="4" cols="30" placeholder="Enter message" name="message"></textarea> </td>
			</tr>
			<tr>
				<td><input type="hidden" name="form" value="contact"></td>
				<td><input type="submit" value="Send message"></td>
				<td><input type="hidden" name="user_id" value="<?=$user_id?>"></td>
			</tr>
		</table>
	</form><br><br><br>

	<p><strong>Phone:</strong> &nbsp; +381 11/495-632</p>
	<p><strong>Mobile:</strong> &nbsp; +381 69/369-521</p>
	<p><strong>Email &nbsp;:</strong> &nbsp; webmaster@bookstore.com</p>
	<br><br>
	<p><a href="https://www.facebook.com/"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></a></i> &nbsp;
	<a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></a></i>  &nbsp;
	<a href="https://www.youtube.com"><i class="fa fa-youtube fa-2x" aria-hidden="true"></a></i> &nbsp; 
	<a href="https://www.instagram.com/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></a></i> </p>
</article>

<div id="map"></div>


<script>
function initMap() {
	var uluru = {lat: 44.848799, lng: 20.404344};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 17,
		center: uluru
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});
}
</script>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNX5ffU-VP50KFrwY2OD0sDHmtxj-IJVQ&callback=initMap"></script>