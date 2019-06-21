<!doctype html>
<?php
session_start();
include_once('processamento/seguranca.php');
include_once('processamento/conexao.php');
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Painel do <?php echo $_SESSION['nivel']?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
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
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <?php
    //Chama o NavBar
    include_once("menu.php");
    //Dinamiza a pagina que sera apresentada.
    $link = $_GET['link'];
    //Define o array das paginas do link.
    $page[0] = 'inicio.php';
    $page[1] = 'cadastro.php';
    $page[2] = 'cadastro.php';
    $page[3] = 'lista_alunos.php';
    $page[4] = 'lista_professor.php';
    //Garante que a pagina inicial vai ser apresentada sempre qua a variavel link estivar vazia.
    if(!empty($link)){
      if(file_exists($page[$link])){
      include $page[$link];
    }else{
        include 'inicio.php';
      }}else{
      include 'inicio.php';}
    ?>

<footer class="container">
  <p class="mt-5 mb-3 text-muted">&copy; Allein 2017-2019</p>
</footer>
<script type="text/javascript" src="js/jquery-slim.js"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"></script>')</script>
      <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>
