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
    $disciplina = $_POST['cbx_disciplina'];
    if(isset($disciplina)){
        $stm = $conn->prepare("DELETE FROM disciplina WHERE cod_disciplina=?");
        $stm->bindValue(1,$disciplina,PDO::PARAM_STR);
        $stm->execute();
    }
    }catch(PDOException $ex_){
	    //echo 'Erro '. $ex->getMessage();
    }
    header('Location: http://localhost/escola_a30');
    ?>
</body>
</html>