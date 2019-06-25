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
      <h3 class="display-4">Edição de cadastro <?php echo $local ?>
    </h3>
    </div>
  </div>
  <form class="p-2" method="POST" action="../../processamento/proc_edit.php">
    <h1>Matricula <span class="badge badge-warning"><?php echo $id; ?></span></h1>
    <div class="col-sm-5">
      <div class="mb-3">
        <label for="firstName">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="" value="<?php echo $resultado['name']?>" required>
        <div class="invalid-feedback">
          Prencher com Nome.
        </div>
      </div>

      <div class="mb-3">
        <label for="username">Usuario</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" name="user" placeholder="" value="<?php echo $resultado['user']?>"required>
          <div class="invalid-feedback" style="width: 100%;">
            Prencher com usuario.
          </div>
        </div>
      </div>
      <div style="display:<?php if($_SESSION['nivel'] == 'Admin'){echo 'block';}else{echo 'none';}?>;" class='mb-3'>
          <label for='password'>Senha</label>
            <div class='input-group'>
              <input type='text' class='form-control' name='password' placeholder='' value="<?php echo $resultado['password']?>">
                <div class='invalid-feedback' style='width: 100%;'>
                  Prencher com senha.
                </div>
            </div>
        </div>
      <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="" value="<?php echo $resultado['email']?>" required>
        <div class="invalid-feedback">
          Prencher com email.
        </div>
      </div>
      <input type="hidden" name="id" placeholder="" value="<?php echo $id?>" required>
      <input type="hidden" name="nv" placeholder="" value="<?php echo $nv?>" required>
      <div class="mb-3">
      <button type="submit" class="btn btn-primary">Atualizar</button>
      <?php echo "
        <a href='processamento/proc_del.php?nv=".$resultado['nv_acs_id']."&id=".$id."' class='btn btn-danger'>Deletar</a>";
      ?>
      </div>
      <input style="display:none" type="text" name="link" value="<?php echo $link?>">
    </div>

</form>
</main>
