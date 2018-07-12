<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trapzeira</title>
</head>
<body>
<h1>Teste TRAPZEIRA</h1>
<h2>Seu resultado foi:</h2>
<?php 

$soma = $_GET['q1'] + $_GET['q2'] + $_GET['q3'] + $_GET['q4'] + $_GET['q5'];

if ($soma == 10) {
	echo $_GET['name']."<br>";
	echo $soma." ponto(s)<br>";
	echo "HÁ! GAYYYYYYY! Esse 'S' no seu peito é de SUPER VIADÃO";
	
}
elseif ($soma >= 6 && $soma <= 9) {
	echo $_GET['name']."<br>";
	echo $soma." ponto(s)<br>";
	echo "Você é quase um super viadão! E gostar de trap é gay sim";
	
}
elseif ($soma >= 1 && $soma <= 5) {
	echo $_GET['name']."<br>";
	echo $soma." ponto(s)<br>";
	echo "Você tem tendências a ser um viadão!";
}
elseif ($soma == 0) {
	echo $_GET['name']."<br>";
	echo $soma." ponto(s)<br>";
	echo "Você é cabra macho memo rapaz, sente cheiro de trap a quilometros, parabains Cindy!";
	
}

 ?>

</form>
</body>
</html>