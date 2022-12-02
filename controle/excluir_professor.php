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
    $professor = $_POST['cbx_professor'];
    if(isset($professor)){
        $stm = $conn->prepare("DELETE FROM professor WHERE cod_professor=?");
        $stm->bindValue(1,$professor,PDO::PARAM_STR);
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