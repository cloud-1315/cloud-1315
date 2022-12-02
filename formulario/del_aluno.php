<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola A30</title>
</head>
<body>
    <h2>Exclusão de aluno</h2>
    <form method="post" action="../controle/excluir_aluno.php">
    <fieldset>
    <?php	  
	include ("../controle/conexao.php");
    $conn = conectar();
	$sql = 'SELECT * FROM aluno';
	print "<select name='cbx_aluno'>";
	foreach ($conn->query($sql) as $row) {
	  print "<option value='".$row['cod_aluno']."'>".$row['nome_aluno']."</option>";
	}
	print "</select>";
	?>
    <input type="submit" value="Excluir">
</fieldset>
    </form>
</body>
</html>