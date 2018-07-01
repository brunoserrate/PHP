<?php 

$pessoa = array('nome'=>'Bruno', 'idade'=>21);

foreach ($pessoa as &$value) {
	
	if (gettype($value) === 'integer') $value += 10;

	echo $value."<br>";
}

print_r($pessoa);
 ?>