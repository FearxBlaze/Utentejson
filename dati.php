<?php
$mysqli=new mysqli("127.0.0.1","root","","utentejson");

if($mysqli->connect_errno){
	die($mysqli->connect->error);
}else{
	echo("Connessione Riuscita!");
}

$result=$mysqli->query("SELECT * FROM utente");
$tabella=$result->fetch_all(MYSQLI_ASSOC);
$testo_json=json_encode($tabella);
echo($testo_json);
?>