<?php
include("conexao.php");
$conn = conectar();
$professor = $_POST["txt_professor"];
$bairro = $_POST["cbx_bairro"];

    $conn->query("INSERT INTO professor(nome_professor,bairro)VALUES('$professor','$bairro')");
    echo'
    <script>
        alert("Registro salvo com sucesso!");
        window.location.href = "../index.html";
    </script>
    ';

?>
