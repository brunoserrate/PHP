<!DOCTYPE html>
<html>
<head>
	<title>Form Teste</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="login">
		<input type="text" name="pass">
		<input type="submit" name="register" value="Registrar">
	</form>
</body>
</html>

<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error){
	echo "Erro: ". $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);

if (isset($_POST['register'])){
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$stmt->execute();
}
else {
	echo "Preencher login e senha!";
}


 ?>