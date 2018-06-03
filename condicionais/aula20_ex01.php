<?php

$idade = 30;

$idadechild = 12;
$idademaior = 18;
$idademelhor = 65;

if ($idade < $idadechild){

	echo "É uma criança";
}
elseif ($idade < $idademaior) {

	echo "É um adolescente";

}
elseif ($idade < $idademelhor){

	echo "É um adulto";
}
else {

	echo "É de idade avançada";
}

echo "<br>";
//Operador ternário ?(se sim) e :(se não);
echo ($idade < $idademaior)?"Menor de idade":"Maior de idade";

?>