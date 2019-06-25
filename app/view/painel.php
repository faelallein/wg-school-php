<!doctype html>
<?php
session_start();
require_once('../../config/config.php');
include_once(DIRREQ.'processamento/seguranca.php');
include_once(DIRCONFIG.'/conexao.php');
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Painel do <?php echo $_SESSION['nivel']?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS;?>/bootstrap.min.css">
    <link href="<?php echo DIRCSS;?>/bootstrap-grid.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="<?php echo DIRCSS;?>jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <?php
    //Chama o NavBar
    include_once(DIRVIEW."/menu.php");
    //Dinamiza a pagina que sera apresentada.
    $link = $_GET['link'];
    //Define o array das paginas do link.
    $page[0] = DIRVIEW.'/inicio.php';
    $page[1] = DIRVIEW.'/cadastro.php';
    $page[2] = DIRVIEW.'/lista.php';
    $page[3] = DIRVIEW.'/editar.php';
    $page[4] = DIRVIEW.'/visualiza.php';
    //Garante que a pagina inicial vai ser apresentada sempre qua a variavel link estivar vazia.
    if(!empty($link)){
      if(file_exists($page[$link])){
      include $page[$link];
    }else{
        include DIRVIEW.'/inicio.php';
      }}else{
      include DIRVIEW.'/inicio.php';
    }
    ?>

<footer class="container">
  <p class="mt-5 mb-3 text-muted">&copy; Allein 2017-2019</p>
</footer>
<script type="text/javascript" src="<?php echo DIRJS;?>/jquery-slim.js"></script>
      <script>window.jQuery || document.write('<script src="<?php echo DIRJS;?>/jquery-slim.min.js"></script>')</script>
      <script src="<?php echo DIRJS;?>/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>
