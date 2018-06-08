<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);


//carega lista de usuários 
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega lista buscando pelo login
///$search = Usuario::search("n");
//echo json_encode($search);

//Carrega usuário usando login e senha
//$usuario = new Usuario();
//$usuario->login("nil", "123456");
//echo $usuario;

//Insert de um usuário novo banco usando DAO
//$aluno = new Usuario("nildimar", "testeskl");
//$aluno->insert();
//echo $aluno;


$usuario = new Usuario();

$usuario->loadbyId(2);

$usuario->update("Goku", "DFSHHRTHww#$");

echo $usuario;

?>