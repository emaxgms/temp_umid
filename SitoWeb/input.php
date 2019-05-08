<?php
	$temp=$_GET['temp'];
	$umid=$_GET['umid'];
	$today= date("Y-n-j H:i:s");
	include"connessione_db.php";
	
	$q="insert into dati(temperatura, umidita, data) values('$temp','$umid','$today');";
	
	$r=mysqli_query($c,$q);
?>
	