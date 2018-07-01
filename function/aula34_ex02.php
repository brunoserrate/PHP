<?php 
//declaração de tipos escalaveis
function soma(int ...$valores): float {

	return array_sum($valores);

}

echo soma(2, 2)."<br>";

echo var_dump(soma(2, 2))."<br>";

echo var_dump(soma (20.5,35.1))."<br>";

echo soma (20.5,35.1)."<br>"

 ?>