<?php
include("conexao.php");
$bairro = $_POST["txt_bairro"];
$conn->query("INSERT INTO bairro(nome_bairro) VALUES ('$bairro')");
?>