<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $matricula = $_POST["matricula"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];

    // Inserir os dados no banco
    $sql = "INSERT INTO alunos (nome, cpf, matricula, endereco, telefone) 
            VALUES ('$nome', '$cpf', '$matricula', '$endereco', '$telefone')";

    if ($conexao->query($sql) === TRUE) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro: " . $conexao->error;
    }
}
?>
