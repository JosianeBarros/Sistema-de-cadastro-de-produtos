<?php
include "db.php";

// Exibi os produtos
$selectProdutos = "SELECT * FROM produtos";
$queryProdutos = $connection->query($selectProdutos);

function exibirProdutos(){
    global $queryProdutos;
    if ($queryProdutos->num_rows > 0){
        echo "
            <table>
            <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Valor por unidade (R$)</th>
            </tr>
            ";
        while($row = $queryProdutos->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . "<input type='text' class='$row[id]' value='$row[nome]'>" . "</td>";
            echo "<td>" . "<input type='text' class='$row[id]' value='$row[quantidade]'>" . "</td>";
            echo "<td>" . "<input type='text' class='$row[id]' value='$row[valor]'>" . "</td>";
            echo "<td>" . "<input type='submit' onclick='atualizarDados($row[id])' value='Salvar alterações'>" . "</td>";
            echo "<td>" . "<input type='submit' onclick='apagarDados($row[id])' value='Apagar'>" . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else{
        echo "<p>Sem produtos cadastrados</p>";
    }
}

$connection->close();
?>
