<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Escola</title>
</head>
<body>
<h3>Cadastro de usuário</h3>
<form method="post" action="../controle/inserir_usuario.php">
<fieldset>		
<table>
    <tr><td><label>Usuário</label></td><td><input type="text" name="txt_user" required></td></tr>
    <tr><td><label>Bairro</label></td>
        <td><select name="cbx_bairro">
                <option value="1">Asa Sul<option>
                <option value="2">Asa Norte<option>
                <option value="3">Lago Sul<option>
                <option value="4">Lago Norte<option>
            </select>
        </td></tr>    
    <tr><td><label>E-mail</label></td><td><input type="email" name="txt_mail" required></td></tr>
    <tr><td><label>Senha</label></td><td><input type="password" name="txt_pass" required></td></tr>
    <tr><td><label>Confirmar Senha</label></td><td><input type="password" name="txt_conf" required></td></tr>    
    <tr><td colspan="2" align="right"><input type="submit" value="Cadastrar"></td></tr>
</table>
</fieldset>
</form>
</body>
</html>