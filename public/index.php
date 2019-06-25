<?php
session_start();
require_once("../config/config.php");
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Pagina de login">
  <meta name="author" content="Allein dev WG">
  <meta name="generator" content="Allein">
  <title>WG School Painel Login</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo DIRCSS;?>/bootstrap.min.css">
  <!-- Custom styles for this template -->
  <link href="<?php echo DIRCSS;?>/signin.css" rel="stylesheet">
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
</head>
<body class="text-center" >
  <form class="form-signin" method="POST" action="<?php echo DIRPAGE?>processamento/valida_login.php">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">User</label>
    <input type="text" name="user" class="form-control" placeholder="User" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <select name="nivel" size="1">
      <option value="Admin">Admin</option>
      <option value="Professor">Professor</option>
      <option value="Aluno">Aluno</option>
    </select>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br/>
    <p class="text-danger">
      <?php
      if(isset($_SESSION['loginErro'])){
        echo $_SESSION['loginErro'];
        unset($_SESSION['loginErro']);}

        //var_dump(DIRREQ);
        ?></p>
        <h1></h1>
        <p class="mt-5 mb-3 text-muted">&copy; Allein 2017-2019</p>
      </form>
    </body>
    </html>
