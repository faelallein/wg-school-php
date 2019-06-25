<?php
  //Pega o id no link da pagina
  $id = $_GET['id'];
  $nv = $_GET['nv'];
  //Define o Local se é aluno ou professor.
  if($nv == 3){$local = 'aluno';}else{$local = 'professor';}
  //Pequisa na devida tabale o cadastro do aluno ou professor
  $pesquisa = $conectar->query("SELECT * FROM $local WHERE id = '$id' LIMIT 1");
  $resultado = $pesquisa->fetch_assoc();
  //Gambiarra para colocar a primeira letra maiuscula.
  if($local == 'aluno'){$local = 'Aluno';}else{$local = 'Professor';}
 ?>
<main role="main">
  <div class="jumbotron">
    <div class="container">
      <p><h3 class="display-4">Nome: <?php echo $resultado['name'] ?></h3><p>
    </div>
  </div>
  <div class="col-md-12">
    <h1>Matricula: <span class="badge badge-warning"><?php echo $id; ?></span></h1>
    <p><h2>Usuario: <span class="badge badge-secondary"><?php echo $resultado['user']; ?></span></h2></p>
    <p><h2>Email: <span class="badge badge-secondary"><?php echo $resultado['email']; ?></span></h2></p>
    <p><h2>Senha: <span class="badge badge-secondary"><?php echo $resultado['password'];?> </span></h2></p>
    <hr class="my-4">
      <div class="mb-3">
    <?php echo "
      <a href='painel.php?link=3&nv=".$resultado['nv_acs_id']."&id=".$id."' class='btn btn-primary'>Editar</a>
      <a href='".DIRPAGE."processamento/proc_del.php?nv=".$resultado['nv_acs_id']."&id=".$id."' class='btn btn-danger'>Deletar</a>
      </div>";
    ?>
    </div>

</form>
</main>
