<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("conexao.php");
    $conn = conectar();
    try{
    $aluno = $_POST['cbx_aluno'];
    if(isset($aluno)){
        $stm = $conn->prepare("DELETE FROM aluno WHERE cod_aluno=?");
        $stm->bindValue(1,$aluno,PDO::PARAM_STR);
        $stm->execute();
    }
    }catch(PDOException $ex_){
	    //echo 'Erro '. $ex->getMessage();
    }
	echo'
    <script>
        alert("Registro excluido com sucesso!");
        window.location.href = "../index.html";
    </script>
    ';
    ?>
</body>
</html>