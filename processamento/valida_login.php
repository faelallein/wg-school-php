<?php
session_start();
$user = $_POST['user'];
$password = $_POST['password'];
$nivel = $_POST['nivel'];
require_once('../config/config.php');
include_once(DIRCONFIG.'/conexao.php');

if($nivel == "Admin"){
// Chamada na tabela de administradores
$result = $conectar->query("SELECT * FROM users WHERE user = '$user' AND password = '$password' LIMIT 1");
$resultado = $result->fetch_assoc();}
else if($nivel == "Professor"){
// Chamada na tabela de Professores
$result = $conectar->query("SELECT * FROM professor WHERE user = '$user' AND password = '$password' LIMIT 1");
$resultado = $result->fetch_assoc();}
else if($nivel == "Aluno"){
// Chamada na tabela de Aluno
$result = $conectar->query("SELECT * FROM aluno WHERE user = '$user' AND password = '$password' LIMIT 1");
$resultado = $result->fetch_assoc();}

if(empty($resultado)){
  //Mensagem de error
  $_SESSION['loginErro'] = 'Usuario ou senha Inválidos';
  //Volta para o inicio disparando a mensagem de error
  header("Location:".DIRPAGE);
} else {
  //Define os valores atribuidos do usuario na sessão.
  $_SESSION['userName'] = $resultado['name'];
  $_SESSION['userId'] = $resultado['id'];
  $_SESSION['userNv'] = $resultado['nv_acs_id'];
  $_SESSION['userEmail'] = $resultado['email'];
  $_SESSION['nivel'] = $nivel;

  //Direciona para o painel inicial
  header("Location:".DIRPAGE."app/view/painel.php");
  //header("Location:../".DIRVIEW."/painel.php");
}
?>
