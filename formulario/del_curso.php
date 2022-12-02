<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola A30</title>
</head>
<body>
    <h2>Exclusão de curso</h2>
    <form method="post" action="../controle/excluir_curso.php">
    <fieldset>
    <?php	  
	include ("../controle/conexao.php");
    $conn = conectar();
	$sql = 'SELECT * FROM curso';
	print "<select name='cbx_curso'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['cod_curso']."'>".$row['nome_curso']."</option>";
	}
	print "</select>";
	?>
    <input type="submit" value="Excluir">
</fieldset>
    </form>
</body>
</html>