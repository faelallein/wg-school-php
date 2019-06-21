<?php
ob_start();
//Impede que alguem copie a ulr e entre sem permissão
if(($_SESSION['userId'] == '') || ($_SESSION['userName'] == '')){
  $_SESSION['loginErro'] = 'Area restrita a Aluno ou Professor';
  header("Location:../login.php");
}
?>
