<?php
include "db.php";

// Adicionar as informações do produto no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $valor = $_POST["valor"];
    $insertDados = "INSERT INTO produtos(nome, quantidade, valor) VALUES ('$nome', '$quantidade', '$valor')";
    $connection->query($insertDados);
}

$url = "index.php";

header('Location: '.$url);

$connection->close();
?>
