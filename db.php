<?php

// Informações de login
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastroProdutos";

// Conexão com o banco de dados
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error){
    die($connection->connect_error);
}

?>