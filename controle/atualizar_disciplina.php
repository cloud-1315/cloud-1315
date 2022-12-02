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
<h1>Atualização de disciplina</h1>
<div class="flex-container">
<div id="box" class="barra">
<fieldset>
<?php
include ("conexao.php");
$conn = conectar();
try{
	$cod_disciplina = $_POST['cbx_disciplina'];	
	$up_disciplina = $_POST['txt_disciplina'];
	$sql = "UPDATE disciplina SET nome_disciplina = '$up_disciplina' WHERE cod_disciplina = $cod_disciplina";
	$conn->query($sql);

}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
echo'
<script>
	alert("Registro atualizado com sucesso!");
	window.location.href = "../index.html";
</script>
';
?>
</fieldset></form></div></div></body></html>