<?php 

 require_once("config.php");
/*
 $sql = new Sql();
 $user=$sql->select("SELECT pass FROM autenticacao WHERE id=1");
 echo json_encode($user);
 */

$user = new Usuario();
$user->loadById(1);
echo $user;

 ?>
