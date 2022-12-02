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
    $curso = $_POST['cbx_curso'];
    if(isset($curso)){
        $stm = $conn->prepare("DELETE FROM curso WHERE cod_curso=?");
        $stm->bindValue(1,$curso,PDO::PARAM_STR);
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