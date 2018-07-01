<!DOCTYPE html>
<html>
<head>
	<title>Exercicío IFRN - 02</title>
</head>
<body>
<h1>Exercício IFRN - 02</h1>
<p>Entrar com um número e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes</p>
<form method="GET">
	<h3>Primeiro número:</h3>
	<input type="text" name="number">
	<input type="submit" name="Enviar"><br><br>
<?php
/*do {
	if (empty($_GET['number'])) {
		echo "<br><strong>Insira um valor!<strong>";
	}
} while (empty($_GET['number']) == true);*/

	if($_GET['number']%10==0){
		echo "Número divisível por 10!<br>";
		echo $_GET['number'];
	}
	elseif ($_GET['number']%5==0) {
		echo "Número divisível por 5!<br>";
		echo $_GET['number'];
	} 
	elseif ($_GET['number']%2==0){
		echo "Número divisível por 2!<br>";
		echo $_GET['number'];
	}
	else {
		echo "Número não divisível por 10, 5 ou 2.<br>";
		echo $_GET['number'];
	}
	
 ?>
</form>
</body>
</html>