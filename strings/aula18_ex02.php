<?php

$nome = "bruno serrate teixeira jeronimo";

//str to upper - Função para deixar tudo maisculo
echo strtoupper($nome);
//str to lower - Função que transforma tudo minusculo
echo "<br>".strtolower($nome);
//uc words - Função que transforma a primeira letra de cada palavra em maisculo
echo "<br>".ucwords($nome);
//uc first - Função que transforma a primeira letra da palavra em maisculo (as outras não ficam maisculo);
echo "<br>".ucfirst($nome);

?>