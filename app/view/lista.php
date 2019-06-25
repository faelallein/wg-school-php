<?php
  //Seleciona os dados da tabela aluno e ordena por ID.
  $lc = $_GET['lc'];
  if($lc == 1){
  $result = $conectar->query("SELECT * FROM aluno ORDER BY id");}
  else{
  $result = $conectar->query("SELECT * FROM professor ORDER BY id");
  }
  $linhas = $result->num_rows;
  echo $lc;
?>
  <main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <p><h3 class="display-4">Listagem de <?php if($lc == 1){echo 'alunos';}else{echo 'professores';}?></h3></p>
      </div>
    </div>
    <div class="container">
      <div class="row justify-self-center">
        <div class="col-md-10">
          <table class="table table-striped table-dark ">
            <thead>
              <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Usuario</th>
              </tr>
            </thead>
            <tbody>
              <?php
              //Pega os itens no Banco e gera a tabela.
              while($linhas = $result->fetch_array(MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td><a class='badge badge-pill badge-danger' href='painel.php?link=4&nv=".$linhas['nv_acs_id']."&id=".$linhas['id']."'>". $linhas['id']."</a></td>";
                echo "<td>". $linhas['name']. "</td>";
                echo "<td>". $linhas['email']. "</td>";
                echo "<td>". $linhas['user']. "</td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
