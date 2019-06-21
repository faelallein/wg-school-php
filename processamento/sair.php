<?php
session_start();
session_destroy();
//Remove todas das variaveis globais
unset($_SESSION['userId'],
$_SESSION['userName']);
//Chama a pagina de login
header("Location:../login.php");
 ?>
