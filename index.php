<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <h2>Cadastro de Alunos</h2>
    <form action="salvar.php" method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        CPF: <input type="text" name="cpf" required><br><br>
        Matrícula: <input type="text" name="matricula" required><br><br>
        Endereço: <input type="text" name="endereco" required><br><br>
        Telefone: <input type="text" name="telefone" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
