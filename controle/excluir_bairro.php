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
    $bairro = $_POST['cbx_bairro'];
    if(isset($bairro)){
        $stm = $conn->prepare("DELETE FROM bairro WHERE cod_bairro=?");
        $stm->bindValue(1,$bairro,PDO::PARAM_STR);
        $stm->execute();
    }
    }catch(PDOException $ex_){
	    //echo 'Erro '. $ex->getMessage();
    }
    header('Location: http://localhost/escola_a30');
    ?>
</body>
</html>