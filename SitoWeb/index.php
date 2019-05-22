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
	</script>
</head>
<body>
	<center><p id="header">Dati Temperatura & Umidit&agrave;</p></center>
	<ul>
		<li onclick="visualizza_live()">Dati Live</li>
		<li onclick="visualizza_storico()">Storico</li>
	</ul>
	<center>
		<div style="width: 800px">
			<p id="stitolo">TIPSIT</p><br><br>
			<p>
				Il nostro progetto consiste nel tenere sotto controllo temperatura e umidit&agrave; in un ambiente, attraverso l'uso del microcontrollore ESP8266-12E e un sensore di temperatura/umidit&agrave; DHT11.<br>
				Questo &egrave; stato programmato utilizzando l'IDE Arduino e il relativo linguaggio di programmazione.<br>
				<a id="stitolo" style="font-size: 18px" href="../ScriptMicrocontrollore/temp_umid/temp_umid.ino" download>CLICCA PER SCARICARE LO SCRIPT</a><br>
				Il sito web invece &egrave; diviso in 3 parti, questa pagina di informazione, una pagina dove possiamo visualizzare i dati in tempo "reale" aggiornati al minuto, e un'altra pagine ove &egrave; possibile visualizzare i valori di temperatura/umidit&agrave; in un determinato lasso di tempo.
			</p>
			<br><br><br><p id="stitolo">INFORMATICA</p><br><br>
			<p>
				Tutto il sistema si basa su un database che contiene una tabella in cui salviamo tutti i dati che arrivano dal microcontrollore, e da cui prendiamo i dati per visualizzarli sotto forma di tabelle nel sito web.
			</p>
			<br><br><br><p id="stitolo">SISTEMI</p><br><br>
			<p>
				Per poter rendere disponibile il sito web dall'esterno della rete locale in cui &egrave; situato (computer personale di Emanuele a casa sua), abbiamo provveduto a aprire la porta 80 del router di casa di Emanuele e cos&igrave; potevamo, attraverso un qualsiasi browser web, scrivendo l'indirizzo ip pubblico, accedere al sito.<br>Per&ograve; c'era un problema ad agire in questo modo, ovvero che l'ip pubblico viene assegnato dinamicamente e quindi non essendo fisso cambiava.
				Per questo abbiamo utilizzato il servizio di NoIp.com che collega l'ip dinamico a un hostname statico con un sottodominio ddns.net.<br><br>
			</p>
		</div>
	</center>
</body>
</html>