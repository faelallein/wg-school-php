<?php
  session_start();
  include_once('seguranca.php');
  include_once('../config/conexao.php');

  $nv = $_GET['nv'];
  $id = $_GET['id'];

  if($nv == 3){
  $conectar->query("DELETE FROM aluno WHERE aluno.id = $id");
  }else{
  $conectar->query("DELETE FROM professor WHERE professor.id = $id");
  }

  if($nv == 3){
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".DIRPAGE."app/view/painel.php?link=2&lc=1'>";}
    else{
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=".DIRPAGE."app/view/painel.php?link=2&lc=2'>";}
 ?>
