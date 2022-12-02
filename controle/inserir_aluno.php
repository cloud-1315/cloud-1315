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
$aluno = $_POST["txt_aluno"];
$bairro = $_POST["cbx_aluno"];
$turma = $_POST["cbx_turma"];
	if(isset($aluno)){
		$stm = $conn->prepare("INSERT INTO aluno(nome_aluno,bairro_aluno,turma_aluno) VALUES (?,?,?)");
		$stm->bindValue(1,$aluno,PDO::PARAM_STR);
		$stm->bindValue(2,$bairro,PDO::PARAM_STR);        
		$stm->bindValue(3,$turma,PDO::PARAM_STR);        
		$stm->execute();
	}
	echo'<script>
			alert("Registro salvo com sucesso!");
			window.location.href = "../index.html";
    	</script>';
}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
</head>
</html>
