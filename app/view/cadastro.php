  <main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h3 class="display-4">Cadastro de <?php
        $lc = $_GET['lc'];
        //Define o Titulo
        if($lc == 1){echo 'Aluno';}else{echo 'Professor';}?>
      </h3>
      </div>
    </div>
    <form class="p-2" method="POST" action="../../processamento/proc_cad.php">
      <div class="col-sm-5">
        <div class="mb-3">
          <label for="firstName">Nome</label>
          <input type="text" class="form-control" name="name" placeholder="" value="" required>
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
            <input type="text" class="form-control" name="user" placeholder="Usuario" required>
            <div class="invalid-feedback" style="width: 100%;">
              Prencher com usuario.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="password">Senha</label>
          <div class="input-group">
            <input type="text" class="form-control" name="password" placeholder="Senha" required>
            <div class="invalid-feedback" style="width: 100%;">
              Prencher com senha.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" placeholder="you@wg.com">
          <div class="invalid-feedback">
            Prencher com email.
          </div>
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        <input style="display:none" type="text" name="link" value="<?php echo $link?>">
      </div>

  </form>
</main>
