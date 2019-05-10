<!DOCTYPE html>
<html>
<?php include"connessione_db.php"; ?>
<head>
	<title>Dati Live</title>
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
<body onLoad="setTimeout('location.reload()',60000)">
	<center><p id="header">Dati Temperatura & Umidit&agrave;</p></center>
	<ul>
		<li onclick="visualizza_live()">Dati Live</li>
		<li onclick="visualizza_storico()">Storico</li>
		<li onclick="visualizza_grafici()">Grafici</li>
	</ul>
	<center>
		<p id="stitolo">Dati aggiornati automaticamente ogni 60 secondi<br><br><br></p>
		<?php
			$query="select * from dati order by data desc limit 1";
			$result=mysqli_query($c,$query);
			echo "<br><br><table border=1>\n<tr>\n<td width=150px>Temperatura</td><td width=150px>Umiditá</td><td width=150px>Data</td>\n</tr>";
			while ($row=mysqli_fetch_array($result)) {
				echo "<tr>";
					echo "<td>".$row["temperatura"]."°C</td>";
					echo "<td>".$row["umidita"]."%</td>";
					echo "<td>".$row["data"]."</td>";
				echo "</tr>";
			}
			echo "</table><br>";
		?>
	</center>
</body>
</html>