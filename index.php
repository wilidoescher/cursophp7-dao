<?php 

require_once("config.php");


//carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");

$aluno->setDeslogin("aluno");
$aluno->setDessenha("aluno");

$aluno->insert();

echo $aluno;
*/

//Alterar um usuário
/*
$usuario = new Usuario();

$usuario->loadById(14);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(13);

$usuario->delete();

echo $usuario;

 ?>