<?php



require_once("config.php");

/* carrega um usuário
$userr = new usuarios();

$userr->loadbyId(3);

echo $userr; */

/*carrega uma lista de usuários

$lista = usuarios::getList();

echo json_encode($lista);*/

/*carrega uma lista de usuários buscando pelo login

$search = usuarios::search("la");

echo json_encode($search);*/

// carrega um usuário usando o login e a senha

$usuario = new usuarios();
$usuario->login("lara23","$%yth&12");

echo $usuario;




?>