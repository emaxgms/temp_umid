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
					$query='select data, temperatura from dati where data between "'.$inizio.'" and "'.$fine.'"';
					$result=mysqli_query($c,$query);
					$dati=array();
					while ($row=mysqli_fetch_array($result)) {
						$dati+=array("".$row['data'].""=>$row['temperatura']);
					}
					print_r($dati);
					//Grafico a linee
					include("phpgraphlib.php"); 
					//Impostiamo la dimensione della griglia del grafico (Larghezza, Altezza)
					$graph=new PHPGraphLib(600,400);
					//Aggiungo i valori di cui sopra
					$graph->addData($data);
					//Imposto il titolo
					$graph->setTitle("Temperature");
					//Indichiamo alla libreria di non mostrare le barre
					$graph->setBars(false);
					//Di conseguenza segnaliamo che si tratta di un grafico a linee
					$graph->setLine(true);
					//Visualizza un bollino nel punto del valore indicato
					$graph->setDataPoints(true);
					//Indichiamo il colore del bollino
					$graph->setDataPointColor("red");
					//Visualizza il valore del punto
					$graph->setDataValues(true);
					//Indichiamo il colore
					$graph->setDataValueColor("black");
					//Creo il grafico
					$graph->createGraph();
					?>
				}
			}
		?>
	</center>
</body>
</html>