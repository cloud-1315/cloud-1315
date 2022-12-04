<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h1>Consulta de bairros</h1>
<div class="flex-container">
<div id="box">
<fieldset>	
	<table border="1"><tr><th width="50%">Bairro</th></tr>
<?php
include ("../controle/conexao.php");
$conn = conectar();
$itens= [];
try{
	$sql = "SELECT nome_bairro FROM bairro";
	$stm = $conn->prepare($sql);
	$stmt->execute();
    $stmt->bind_result($bairro);
    
	foreach ($conn->query($sql) as $row) {
	   print "<tr><td>".$row['nome_bairro']."</td></tr>";
	}
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}


/*
	$stm = $conn->prepare("INSERT INTO bairro(nome_bairro) VALUES (?)");
    $stmt = $this->conexao->prepare($sql);

    $stmt->execute();
    $stmt->bind_result($termo);
    while ($stmt->fetch()) {

        array_push($itens, $termo);
    }
    return $itens;
*/
?>
</table><br><a href='http://localhost/00_marcelo/projeto_locadora'>Voltar</a>
</fieldset></div></div></body></html>
