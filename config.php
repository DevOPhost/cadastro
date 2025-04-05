<?php
$host = "localhost";
$usuario = "root"; // Usuário padrão do MySQL no XAMPP
$senha = ""; // Senha padrão (vazia no XAMPP)
$banco = "faculdade1";

// Criar conexão
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar se houve erro
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
