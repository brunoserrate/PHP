<?php 

//session_id('vb1vlhm1uq2cbqit2bgpqng2lt');

require_once("aula28_ex03_config.php");

session_regenerate_id();

echo session_id()."<br>";

var_dump($_SESSION);

 ?>