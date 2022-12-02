/*
$sql = "SELECT * FROM usuarios WHERE usuario = $user;
$query Conexao->prepare($sql);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	echo "<script>alert('Usuario ou senha incorretos');</script>";	
	exit();
}

$user = "Bruce";
$sql = "SELECT * FROM usuarios WHERE usuario = $user;
$query Conexao->prepare($sql);

session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = ($conexao, $query);

$row = $conn($result);
*/
