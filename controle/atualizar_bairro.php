<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h1>Atualização de bairro</h1>
<div class="flex-container">
<div id="box" class="barra">
<fieldset>
<?php
include ("conexao.php");
$conn = conectar();
try{
	$cod_bairro = $_POST['cbx_bairro'];	
	$up_bairro = $_POST['txt_bairro'];
	$sql = "UPDATE bairro SET nome_bairro = '$up_bairro' WHERE cod_bairro = $cod_bairro";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
header('Location: http://localhost/escola_a30');
?>
</fieldset></form></div></div></body></html>