<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h1>Consulta de alunos</h1>
<div class="flex-container">
<div id="box">
<fieldset>	
	<table border="1"><tr><th width="50%">Aluno</th><th>Curso</th><th>Bairro</th></tr>
<?php
include ("../controle/conexao.php");
$conn = conectar();
try{
	$sql = "SELECT nome_aluno,nome_curso,nome_bairro FROM aluno
	INNER JOIN turma ON turma_aluno=num_turma
    INNER JOIN curso ON curso_turma=cod_curso	
    INNER JOIN bairro ON bairro_aluno=cod_bairro";
	foreach ($conn->query($sql) as $row) {
	   print "<tr><td>".$row['nome_aluno']."</td><td>".$row['nome_curso']."</td><td>".$row['nome_bairro']."</td></tr>";
	}
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</table><br><a href='http://localhost/00_marcelo/projeto_locadora'>Voltar</a>
</fieldset></div></div></body></html>
