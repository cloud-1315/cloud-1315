<?php	  
	require_once ("../controle/conexao.php");
	$conn = conectar();
	$sql = 'SELECT * FROM bairro';
	print "<select name='cbx_bairro'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['cod_bairro']."'>".$row['nome_bairro']."</option>";
	}
	print "</select>";
?>
