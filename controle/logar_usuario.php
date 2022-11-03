<?php
include("conexao.php");

$user = $_POST["txt_user"];
$pass = md5($_POST["txt_pass"]);

$sql = "SELECT * FROM usuario where usuario = '$user'";

$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$usuario = $row[usuario];
$senha = $row[senha];

if($usuario == $user and $pass==md5($senha)) {
	$_SESSION['usuario'] = $usuario;
} else {
	header('Location: ../formulario/form_login.php');
	echo "<script>alert('Usuario ou senha incorretos');</script>";
}

?>
