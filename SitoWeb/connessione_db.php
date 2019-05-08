<?php
	$c=mysqli_connect('localhost','root','');
	if (!$c) {
		die("Connection failed: " . mysqli_connect_error());
	}
	mysqli_select_db($c,'temp_umid'); 
 ?>