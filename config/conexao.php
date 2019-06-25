<?php
require_once("config.php");
//Conecta no banco de dados.
$conectar = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB) or die ("Error de conexão");?>
