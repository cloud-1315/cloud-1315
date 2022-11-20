<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Projeto PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo/geral.css">
</head>
<?php
include("conexao.php");
$conn = conectar();
$bairro = $_POST["txt_bairro"];
$conn->query("INSERT INTO bairro(nome_bairro) VALUES ('$bairro')");
header('Location: http://localhost/escola_a30');
?>
</head>
</html>
