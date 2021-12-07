<?php 

date_default_timezone_set("America/Bogota");
require_once("config.php");

// Lista todos os dados contidos em uma determinada tabela do banco de dados.
// $sql = new Sql();

// $usuarios = $sql->execSelect("SELECT * FROM tb_usuarios;");

// echo json_encode($usuarios);

// echo "<br>";


// Lista os usuários baseado em um determinado id.
// $root = new Usuario();

// $root->loadById(6);

// echo $root;

//echo "<br>";


// Carrrega uma lista de usuários
// $userlist = Usuario::getList();

// echo json_encode($userlist);


// // Carrega uma lista de uruários buscando pelo login
$search = Usuario::search("lo");

echo json_encode($search);


// Carrega um uruário usando o login e a senha.
// $usuario = new Usuario();

// $usuario->login("root", "02838383");

// echo $usuario;

?>