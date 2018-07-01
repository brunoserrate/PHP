<?php 
//declaração de tipos escalaveis
function soma(int ...$valores){

	return array_sum($valores);

}

echo soma(2, 2)."<br>";

echo soma (20.5,35.1)."<br>";

 ?>