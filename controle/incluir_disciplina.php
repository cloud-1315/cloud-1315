<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Locadora</title>
	<link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Escolha a opção desejada</h1>
<div class="flex-container">
<div id="box">
<fieldset>    
<?php
include("conexao.php");
$conn = conectar();
try{
    $disciplina=$_POST['item'];
    $sql = "SELECT cod_curso FROM curso ORDER BY cod_curso DESC LIMIT 1";
    foreach($conn->query($sql) as $row){
        $curso = $row['cod_curso'];
    }
    $sql="INSERT INTO curso_tem_disciplina(curso,disciplina) 
         VALUES ($curso,$disciplina)";
    $conn->query($sql);
	echo "<a href='../consulta/consultar_disciplina.php'>Selecionar outra disciplina</a><br><br>
	 <a href='../consulta/concluir_formacao_curso.php'>Finalizar seleção</a>";
}catch(PDOException $ex){
    echo 'Erro'.$ex->getMessage();
}
?>
</fieldset></div></div></body></html>
