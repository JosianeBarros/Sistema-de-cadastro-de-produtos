<?php
include "db.php";

// Atualiza os produtos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $valor = $_POST["valor"];
    $updateDados = "UPDATE produtos SET nome='$nome', quantidade='$quantidade', valor='$valor' WHERE id=$id";
    $connection->query($updateDados);
}

$connection->close();
?>
