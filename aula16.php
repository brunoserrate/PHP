<?php

$nome = "Bruno";

function teste () {

	global $nome;
	echo $nome;
}

function teste02 (){

	$nome = "joão";
	echo $nome." agora no teste 02";
}

teste();
echo "<br>";
teste02();


?>