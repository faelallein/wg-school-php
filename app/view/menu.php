<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<h2><a class="navbar-brand badge badge-info" href="#">Wg School</a></h2>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav mr-auto">
  <li class="nav-item">
    <a class="nav-link" href="painel.php?link=0">Inicio</a>
  </li>
  <?php
  if($_SESSION['userNv'] == 1){
    echo "
    <li class='nav-item'>
      <a class='nav-link' href='#'>Balanço da Faculdade</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='#'>test 2</a>
    </li>
    <li class='nav-item dropdown'>
      <a class='nav-link dropdown-toggle' href='#' id='dropdown01' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Painel</a>
      <div class='dropdown-menu' aria-labelledby='dropdown01'>
        <a class='dropdown-item' href='painel.php?link=1&lc=1'>Cadastrar Aluno</a>
        <a class='dropdown-item' href='painel.php?link=1&lc=2'>Cadastrar Professor</a>
        <a class='dropdown-item' href='painel.php?link=2&lc=1'>Listar alunos</a>
        <a class='dropdown-item' href='painel.php?link=2&lc=2'>Listar Professores</a>
      </div>
    </li>
  </ul>";}
    else if($_SESSION['userNv'] == 2){
      echo "
      <li class='nav-item'>
        <a class='nav-link' href='#'>Teste 1</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='#'>Teste 2</a>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='dropdown01' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Painel</a>
        <div class='dropdown-menu' aria-labelledby='dropdown01'>
          <a class='dropdown-item' href='painel.php?link=2&lc=1'>Listar alunos</a>
          <a class='dropdown-item' href='#'>Lançar notas</a>
          <a class='dropdown-item' href='#'>Recados para alunos</a>
        </div>
      </li>
    </ul>";
    }else if($_SESSION['userNv'] == 3){
      echo "
      <li class='nav-item'>
        <a class='nav-link' href='#'>Balanço Aluno</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='#'>Grade</a>
      </li>
      <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='dropdown01' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Painel</a>
        <div class='dropdown-menu' aria-labelledby='dropdown01'>
          <a class='dropdown-item' href='#'>Ver Materias</a>
          <a class='dropdown-item' href='#'>Ver Notas</a>
          <a class='dropdown-item' href='#'>Ver Recados</a>
        </div>
      </li>
    </ul>";
    }
    echo "<p style='color:white;margin-right:20px;margin-bottom:5px;'>".$_SESSION['userName']."</p>";
?>
<a role="button" aria-pressed="true" class="btn btn-outline-danger my-2 my-sm-0" href="<?php echo DIRPAGE;?>processamento/sair.php">Sair</a>
</div>
</nav>
