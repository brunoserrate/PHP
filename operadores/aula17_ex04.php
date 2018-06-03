<?php

$a = 30;
$b = 55;
$c = 40;
$d = 40.0;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a = $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
// operação de igualdade de identidade (se as variaveis são iguais no seu tipo);
var_dump($c === $d);
echo "<br>";
var_dump($c != $d);
echo "<br>";
var_dump($c !== $d);
?>