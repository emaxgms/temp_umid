<!DOCTYPE html>
<html>
<?php include"connessione_db.php"; ?>
<head>
	<title>Dati Storici</title>
	<link href="stili.css" rel="stylesheet" type="text/css" media="all">
	<script type="text/javascript">
		function visualizza_live(){
			window.location.href="live.php";
		}
		function visualizza_storico(){
			window.location.href="storico.php";
		}
	</script>
</head>
<body>
	<center><p id="header">Dati Temperatura & Umidit&agrave;</p></center>
	<ul>
		<li onclick="visualizza_live()">Dati Live</li>
		<li onclick="visualizza_storico()">Storico</li>
	</ul>
	<center>
		<p id="stitolo">Selezionare intervallo di tempo desiderato<br><br><br></p>
		<form method="post" action="">
			<p>Da: </p><input type="datetime-local"  name="inizio" style="margin-right: 60px">
			<p>A: </p><input type="datetime-local" name="fine" style="margin-right: 60px">
			<input type="submit" value="Visualizza Storico">
		</form>
		<?php
			if(isset($_POST['inizio'])){
				$inizio=$_POST['inizio'];
				$fine=$_POST['fine'];
				if (($inizio=="") || ($fine=="") ) {
					echo "<br><br><center><p id=errore>Errore, seleziona le date e riprova!</p></center>";
				}else{
					$query='select * from dati where data between "'.$inizio.'" and "'.$fine.'"';
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
				}
			}
		?>
	</center>
</body>
</html>