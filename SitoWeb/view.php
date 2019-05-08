<!DOCTYPE html>
<html>
<?php include"connessione_db.php"; ?>
<head>
	<title>Home</title>
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
	<p id="header">Dati Temperatura & Umidit&agrave;</p>
	<ul>
		<li onclick="visualizza_live()">Dati Live</li>
		<li onclick="visualizza_storico()">Storico</li>
		<li onclick="visualizza_grafici()">Grafici</li>
	</ul>
		<?php
			//$query='select DATE_FORMAT(data, "%i") as minsec from last_in';
			//$result=mysqli_query($c,$query);
			//echo "<table border=1>\n<tr>\n<td>Temperatura</td><td>Umiditá</td><td>Data</td>\n</tr>";
			//while ($row=mysqli_fetch_array($result)) {
			//	echo "<tr>";
			//		echo "<td>".$row["data"]."</td>";
			//	echo "</tr>";
			//}
			//echo "</table>"; 
			//$today= date_create("2019-05-06 23:53:57");
			//$x=date_format($today, "s");
			//echo "$x";
			//$today=date("Y-n-j H:i:s");
			//$mod=date("Y-n-j H:i:s", strtotime($today . ' + 1 minutes'.'- 60 seconds'));
			//$x=date_format($mod, "s");
			//echo "sono x: $x";
			//echo "$mod e $today";
			//echo "$mod";

			//echo date('Y-n-j H:i:s', strtotime($today . ' + 1 days'));
			//$date = date("Y-n-j H:i:s");
			//increment 2 days
			//$mod_date = strtotime($date."+ 2 days");
			//echo date("Y-n-j H:i:s",$mod_date) . "\n";
		?>	
</body>
</html>