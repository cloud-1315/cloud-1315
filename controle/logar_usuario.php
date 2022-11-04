<?php
include("conexao.php");
session_start();
$user = $_POST["txt_user"];
$pass = md5($_POST["txt_pass"]);

$sql = "SELECT * FROM usuario where usuario = '$user'";

$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$usuario = $row[usuario];
$senha = $row[senha];

if($usuario == $user and $pass==md5($senha)) {		

	$_SESSION['usuario'] = $user;
	$_SESSION['senha'] = $pass;
	header('location:../index.html');
} else {
	unset ($_session['$user'];
	unset ($_session['$pass'];	
	echo "Usuario ou senha incorretos, <a href='../formulario/form_login.php'>tente novamente</a>";
}
?>
