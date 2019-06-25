<?php
session_start();
session_destroy();
require_once('../config/config.php');
//Remove todas das variaveis globais
unset($_SESSION['userId'],
$_SESSION['userName']);
//Chama a pagina de login
header("Location:".DIRPAGE);
?>
