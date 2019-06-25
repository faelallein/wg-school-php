
<?php
//Define o que vai ser apresentado no inicio.
if($_SESSION['userNv'] == 1){
  echo "<main role='main'>
    <div class='jumbotron'>
      <div class='container'>
        <p><h3 class='display-4'>Bem vindo ADM ".$_SESSION['userName']."</h3></p>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class='btn btn-primary btn-lg' href='#' role='button'>Learn more &raquo;</a></p>
      </div>
    </div>
  </main>";
    }
  else if($_SESSION['userNv'] == 2){
    echo "<main role='main'>
      <div class='jumbotron'>
        <div class='container'>
          <p><h3 class='display-4'>Bem vindo Professor ".$_SESSION['userName']."</h3></p>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class='btn btn-primary btn-lg' href='#' role='button'>Learn more &raquo;</a></p>
        </div>
      </div>
    </main>";
  }else if($_SESSION['userNv'] == 3){
    echo "<main role='main'>
      <div class='jumbotron'>
        <div class='container'>
          <p><h3 class='display-4'>Bem vindo Aluno ".$_SESSION['userName']."</h3></p>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class='btn btn-primary btn-lg' href='#' role='button'>Learn more &raquo;</a></p>
        </div>
      </div>
    </main>";
  }
?>
