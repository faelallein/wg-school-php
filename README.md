# wg-school-php

# Painel Administrativo de Faculdade

 -Painel possui 3 níveis de acesso: Admin, Professor e Aluno.
 -Admin capaz de cadastrar alunos e professores, também é capaz de lista-los.
 -Professores capaz listar alunos.

# Instruções de inicio.

1 - Importar o wg_schoool.sql no PHPMyAdmin.
2 - Na pasta de processamento, abrir a pagina "conexao.php"e colocar o login e a senha nos campos >>$conectar = new mysqli("localhost", "(seu login)" , "(sua senha)", "wg_school") or die ("Error de conexão");<<
