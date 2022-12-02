<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Disciplinas</h1>
<div class="flex-container">
<div id="box" class="barra">
	<table border="1"><tr><th width="50%">Titulo</th></tr>
<?php
include ("../controle/conexao.php");
$conn = conectar();
try{
    $disciplina=$_POST['txt_disciplina'];
    $sql="SELECT * FROM disciplina WHERE nome_disciplina LIKE '%$disciplina%' ORDER BY nome_disciplina";
    print "<form method='post' action='../controle/incluir_disciplina.php'>";
    foreach($conn->query($sql) as $row){
        print "<tr><td><input name='item' type='radio' value='".$row['cod_disciplina']."'>".$row['nome_disciplina']."</td></tr>";
    }
    echo "<input type='submit' value='Incluir item'></form></table>";
}catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
}
?>
</div></div></body></html>