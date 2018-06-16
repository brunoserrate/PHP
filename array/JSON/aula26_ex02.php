<?php 

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25},{"nome":"Bruno","idade":21}]';

$dado = json_decode($json);

var_dump($dado);

 ?>