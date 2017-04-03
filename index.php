<?php 

	require_once("config.php");

	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);


	//carrega um usuario
	//$root = new Usuario();
	//$root->loadById(1);
	//echo $root;


// carrega varios usuarios
	//$lista = Usuario::getList();
	//echo json_encode($lista);



//carrega uma lista de usu pelo login
	//$search = Usuario::search("ro");
	//echo json_encode($search)



$usuario = new Usuario();
$usuario->login("jose","1233242342");


echo $usuario;

 ?>