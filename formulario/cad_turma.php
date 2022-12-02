<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Escola a30</title>
   	<link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<body>
<h3>Cadastro de turma</h3>
<form method="post" action="../controle/inserir_turma.php">
<fieldset>		
<table>
    <tr><td><label>Professor</label></td>
    <td><?php	  
	include ("../controle/conexao.php");
	$conn = conectar();
	$sql = 'SELECT * FROM professor';
	print "<select name='cbx_professor'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['cod_professor']."'>".$row['nome_professor']."</option>";
	}
	print "</select>";
	echo '</td></tr>
    <tr><td><label>Curso</label></td>
    <td>';	  
	$sql = 'SELECT * FROM curso';
	print "<select name='cbx_curso'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['cod_curso']."'>".$row['nome_curso']."</option>";
	}
	print "</select>";
	?></td></tr>    
    <tr><td colspan="2" align="right"><input type="submit" value="Cadastrar"></td></tr>
</table></fieldset></form></body></html>

