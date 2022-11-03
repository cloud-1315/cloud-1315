<?php
include("conexao.php");

$professor = $_POST["txt_professor"];
$bairro = $_POST["cbx_bairro"];

    $conn->query("INSERT INTO professor(nome_professor,bairro)VALUES('$professor','$bairro')");
    echo "<script>alert('Professor cadastrado com sucesso')</script>
    <a href='../index.html'>Voltar</a>";
}
?>
