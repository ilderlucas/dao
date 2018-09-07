<?php 

 require_once("config.php");

 $sql = new Sql();
 $user=$sql->select("SELECT pass FROM autenticacao WHERE id=1");
 echo json_encode($user);
 ?>