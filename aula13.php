<?php

//////////////////////////////////////////////////////// Básicos
$nome = "Bruno";
$sobrenome = 'Serrate';
$nomecompleto = $nome . " " . $sobrenome;

$ano = 1997;

$salario = 5500.90;
$bloqueado = false;
///////////////////////////////////////////////////////// Compostos
$frutas = array("abacaxi", "laranja", "manga", "maçã", "tangerina");

$nascimento = new DateTime();

//var_dump($nascimento);

///////////////////////////////////////////////////////// Especiais
$arquivo = fopen("index.php", "r");

var_dump($arquivo);


 ?>