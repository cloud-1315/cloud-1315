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
try{
$bairro = $_POST["txt_bairro"];
if(isset($bairro)){
	$stmt = $conn->prepare("INSERT INTO bairro(nome_bairro) VALUES (?)");
	$stmt->bindValue(1,$bairro,PDO::PARAM_STR);
	$stmt->execute();
}
header('Location: http://localhost/escola_a30');
echo "<script language='javascript' type='text/javascript'>setInterval(displayHello, 1000);</script>";
}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
$stm,$conn = null;
?>
</head>
</html>
