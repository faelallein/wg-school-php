<?php
  session_start();
  include_once('seguranca.php');
  include_once('../config/conexao.php');

  $nome = $_POST['name'];
  $user = $_POST['user'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $nv = $_POST['nv'];
  $id = $_POST['id'];

  if($nv == 3){
  $conectar->query("UPDATE aluno SET name = '$nome', email = '$email', user = '$user', password = '$password' WHERE aluno.id = '$id'");
  }else{
  $conectar->query("UPDATE professor SET name = '$nome', email = '$email', user = '$user', password = '$password' WHERE professor.id = '$id'");
  }

  if($nv == 3){
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".DIRPAGE."app/view/painel.php?link=2&lc=1'>";}
    else{
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".DIRPAGE."app/view/painel.php?link=2&lc=2'>";}
 ?>
