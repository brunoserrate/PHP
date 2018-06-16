<?php 

require_once("aula28_ex03_config.php");

//session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

session_destroy();

 ?>