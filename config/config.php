<?php
//Define os diretorios raizes.
  $pastaInterna="";
  define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
  define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");

//Define outros diretorios.
  define('DIRCSS', DIRPAGE."public/css");
  define('DIRJS', DIRPAGE."public/js");
  define('DIRVIEW', DIRREQ."app/view");
  define('DIRCONFIG', DIRREQ."config");

//Define acesso ao Banco de dados.
  define('DB_HOST', "localhost");
  define('DB_USER', "root");
  define('DB_PASSWORD', "");
  define('DB', "wg_school");
?>
