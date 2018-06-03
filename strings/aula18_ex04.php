<?php

$frase = "A repetição é mãe da retenção";
$palavra = "mãe";
//strpos - procura a posição de uma palavra dentro da var. string. Variavel que vai fazer a busca, palavra buscada.
$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

?>