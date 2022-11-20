<?php
include("conexao.php");
$conn = conectar();
$user = $_POST["txt_user"];
$mail = $_POST["txt_mail"];
$pass = md5($_POST["txt_pass"]);
$conf = md5($_POST["txt_conf"]);

if($pass<>$conf){
    echo "<script>alert('Senhas não conferem')</script>
    <a href='../formulario/cad_usuario.php'>Voltar</a>";
    //echo "Senhas não conferem"
}else{
    $conn->query("INSERT INTO usuario(usuario,email,senha)VALUES('$user','$mail','$pass')");
    echo "<script>alert('Usuario cadastrado com sucesso')</script>
    <a href='../index.html'>Voltar</a>";
}
?>
