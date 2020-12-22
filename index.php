<?php



require_once("config.php");

$userr = new usuarios();

$userr->loadbyId(3);

echo $userr;




?>