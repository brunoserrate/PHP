<!DOCTYPE html>
<html>
<head>
	<title>Exercicío IFRN - 03</title>
</head>
<body>
<h1>Exercício IFRN - 03</h1>
<p>Entrar com nome, sexo e idade de uma
pessoa. Se a pessoa for do sexo feminino e
tiver menos que 25 anos, imprimir nome e a
a mensagem: ACEITA. Caso contrário,
imprimir nome e a mensagem: NÃO ACEITA.</p>
<form method="GET">
	<h3>Nome:</h3>
	<input type="text" name="name">
	<h3>Sexo:</h3>
	<input type="text" name="sexo">
	<h3>Idade:</h3>
	<input type="text" name="age">
	<input type="submit" name="Enviar"><br><br>
<?php
if(empty($_GET)){
	echo "Insira os valores!";
	}
else{
if ($_GET['sexo'] == 'F' || $_GET['sexo'] == 'Feminino' || $_GET['sexo'] == 'Mulher'){
	if ($_GET['age'] < 25){
		echo $_GET['name']."<br>";
		echo "ACEITA!<br>";
	}
	else {
		echo $_GET['name']."<br>";
		echo "NÃO ACEITA!<br>";
	}
}
else {
	echo $_GET['name']."<br>";
	echo "NÃO ACEITO!<br>";
}
}
 ?>
</form>
</body>
</html>