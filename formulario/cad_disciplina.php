<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Escola</title>
	<link rel="stylesheet" type="text/css" href="../estilo/geral.css">    
</head>
<body>
<div id="flex-container">
<article class="boxinterno">
<h3>Cadastro de disciplina</h3>
    <form method="post" action="../controle/inserir_disciplina.php">
    <fieldset><br>        
        <label>Digite o disciplina</label>
        <input type="text" name="txt_disciplina"><br>
        <input type="submit" value="Cadastrar" class="botoes"><br><br>
    </fieldset>
    </form>
</article>
</div>
</body>
</html>
