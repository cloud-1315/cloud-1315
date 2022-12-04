<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola a30</title>
   	<link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<body>
<h3>Cadastro de aluno</h3>
<form method="post" action="../controle/inserir_aluno.php">
<fieldset>		
<table>
    <tr><td><label>Aluno</label></td><td><input type="text" name="txt_aluno" required></td></tr>
    <tr><td><label>Bairro</label></td>
        <td><?php	  
	include_once("../modulo/mod_select_bairro.php");
	}
	print "</select></td>";
    echo "<td>Turma";
	$sql = 'SELECT * FROM turma';
	print "<select name='cbx_turma'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['num_turma']."'>".$row['num_turma']."</option>";
	}
	print "</select>";
}catch(PDOException $ex_){
    //echo 'Erro '. $ex->getMessage();
}
?></td></tr>    
    <tr><td colspan="2" align="right"><input type="submit" value="Cadastrar"></td></tr>
</table></fieldset></form></body></html>
