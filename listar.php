<?php
include("config.php");

$sql = "SELECT * FROM alunos";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
</head>
<body>
    <h2>Lista de Alunos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Matrícula</th>
            <th>Endereço</th>
            <th>Telefone</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["nome"] ?></td>
                <td><?= $row["cpf"] ?></td>
                <td><?= $row["matricula"] ?></td>
                <td><?= $row["endereco"] ?></td>
                <td><?= $row["telefone"] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
