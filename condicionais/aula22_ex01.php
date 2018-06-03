<?php

/*for ($i = 0; $i <= 10; $i++){
	if ($i < 2) {
		echo $i." chocolate<br>";
	}
	else {
		echo $i." chocolates<br>";
	}
}*/

/*for ($i=0; $i <= 50; $i+=5) { 

	echo $i."<br>";
}*/

for ($i=0; $i < 1000; $i+=5) { 
	if ($i >= 200 && $i <= 800) continue;
		echo $i."<br>";
}

?>