<!DOCTYPE html>
<html>
<?php include"connessione_db.php"; ?>
<head>
	<title>Grafici</title>
	<link href="stili.css" rel="stylesheet" type="text/css" media="all">
	<script type="text/javascript">
		function visualizza_live(){
			window.location.href="live.php";
		}
		function visualizza_storico(){
			window.location.href="storico.php";
		}
		function visualizza_grafici(){
			window.location.href="grafici.php";
		}
	</script>
</head>
<body>
	<center><p id="header">Dati Temperatura & Umidit&agrave;</p></center>
	<ul>
		<li onclick="visualizza_live()">Dati Live</li>
		<li onclick="visualizza_storico()">Storico</li>
		<li onclick="visualizza_grafici()">Grafici</li>
	</ul>
	<center>
		
	</center>
</body>
</html>