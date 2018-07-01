<?php 

class Pessoa {
	public $nome; //Atributo
	public function falar(){ //Método

		return "O meu nome é ".$this->nome;

	}
}
$bruno = new Pessoa();
$bruno->nome = "Bruno Serrate";
echo $bruno->falar();
 ?>