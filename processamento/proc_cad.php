<?php
  session_start();
  include_once('seguranca.php');
  include_once('../config/conexao.php');

  $nome = $_POST['name'];
  $user = $_POST['user'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $link = $_POST['link'];

  if($link == 1){
  $conectar->query("INSERT INTO aluno (name, user, password, email, nv_acs_id) VALUES ('$nome', '$user', '$password', '$email', '3')");
  }else{
  $conectar->query("INSERT INTO professor (name, user, password, email, nv_acs_id) VALUES ('$nome', '$user', '$password', '$email', '2')");
  }

  if($conectar->affected_rows != 0 ){
    if($link == 1){
      echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".DIRPAGE."app/view/painel.php?link=2&lc=1'>";}
      else{
      echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".DIRPAGE."app/view/painel.php?link=2&lc=2'>";}
  }
 ?>
