<?php 
/* Acompanhar o start e o end de cada array, pois cada um é um bloco para cada cargo
*/


$hierarquia = array(
	array(
		"nome_cargo"=>"CEO",
		"subordinados"=>array(
			//Start: Diretor Comercial
			array(
				"nome_cargo" => "Diretor comercial",
				//Start: Gerente de vendas
				"subordinados" => array(
					array(
					"nome_cargo" => "Gerente de Vendas"
					)
				)
				//end: Gerente de vendas
			),
			//End: Diretor Comercial
			//Start: Diretor Financeiro
			array(
				"nome_cargo"=>"Diretor Financeiro",
				//Start: Gerente de compras
				"subordinados"=>array(
					array(
					"nome_cargo"=>"Gerente de compras",
					//start: supervisor de suprimentos
					"subordinados"=>array(
						array(
						"nome_cargo"=>"Supervisor de Suprimentos"
						)
					)
				),
					//end: supervisor de suprimentos
				array(
					"nome_cargo" => "Gerente Financeiro",
					"subordinados"=> array(
						array(
							"nome_cargo" => "supervisor de Contas"
						)
					)
				)
				)
			)
		) 
	)
);

function exibe($cargos){

	$html = "<ul>";
	foreach ($cargos as $cargo) {	
		$html .="<li>";
		$html .= $cargo["nome_cargo"];
		if (isset($cargo["subordinados"]) && count($cargo["subordinados"]) > 0){
			$html .= exibe($cargo["subordinados"]);
		}
		$html .="</li>";
	}
	$html .= "</ul>";
	return $html;
}

echo exibe($hierarquia);

 ?>