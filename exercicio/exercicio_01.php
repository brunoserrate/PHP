<!DOCTYPE html>
<html>
<head>
	<title>Exercicío IFRN - 01</title>
</head>
<body>
<h1>Exercício IFRN - 01</h1>
<p>Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5</p>
<form method="get">
	<h3>Primeiro número:</h3>
	<input type="text" name="firstnumber">
	<h3>Segundo número:</h3>
	<input type="text" name="lastnumber"><br>
	<input type="submit" name="Enviar"><br><br>
<?php 
if (empty($_GET)){
	echo "Sem valor";
}
else {
$resultpart = $_GET["firstnumber"] + $_GET["lastnumber"];
$result = 0;
if ($resultpart > 20) {
	$result = $resultpart + 8;
}
elseif ($resultpart <= 20) {
	$result = $resultpart - 5;
}

echo $_GET["firstnumber"]."+".$_GET["lastnumber"]."<br>";
echo "Resultado parcial: ".$resultpart."<br>";
echo "Resultado final: ".$result;
}
 ?>
</form>
</body>
</html>