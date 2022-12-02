<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola a30</title>
	<link rel="stylesheet" type="text/css" href="../estilo/geral.css">    
</head>
<body>
<h3>Cadastro de usuário</h3>
<form method="post" action="../controle/logar_usuario.php">
<fieldset>		
<table>
    <tr><td><label>Usuário</label></td><td><input type="text" name="txt_user" required></td></tr>
    <tr><td><label>Senha</label></td><td><input type="password" name="txt_pass" required></td></tr>  
    <tr><td colspan="2" align="right"><input type="submit" value="Login"></td></tr>
</table>
</fieldset>
</form>
</body>
</html>
