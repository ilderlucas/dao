<?php 

 require_once("config.php");
/*
 $sql = new Sql();
 $user=$sql->select("SELECT pass FROM autenticacao WHERE id=1");
 echo json_encode($user);
 */

// carrega apenas um usuário
//$user = new Usuario();
//$user->loadById(2);
 //echo $user;

  //lista de usuários - não funcionou verificar depois
  //$lista = Usuario::getList();
  //echo json_encode($lista);
 
 // pesquisa por por um usuário por uma parte da palavra
 //$search = Usuario::search("Lu");
 //echo json_encode($search);

 // carrega usuário usando login e senha
// $usuario = new Usuario();
 //$usuario->login("Lucas Oliveira","12567890");
 //echo $usuario;

// insere e retorna os valores inseridos
 //$aluno = new Usuario("Oliveira","1990"); // passando os valores para o construtor
 //$aluno->setDeslogin("Lucas");
 //$aluno->setDessenha("12345");
 //$aluno->insert();
//echo $aluno;

/* Altera um usuário
 $usuario = new Usuario();
 $usuario->loadById(4);
 $usuario->update("Professor","prof123");
 echo $usuario; */

 $usuario = new Usuario();
 $usuario->loadById(3);
 $usuario->delete();
 echo $usuario;

 ?>
