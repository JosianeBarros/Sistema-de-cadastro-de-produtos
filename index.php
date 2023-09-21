<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sistema de cadastro de produtos</title>
</head>
<body>
    <h1>Sistema de cadastro de produtos</h1>
    <form action="cadastro.php" method="post">
        <label>Nome do produto:</label>
        <input type="text" name="nome">

        <label>Quantidade:</label>
        <input type="number" min="0" name="quantidade">

        <label>Valor por unidade:</label>
        <input type="number" min="0" name="valor">

        <input type="submit" value="Cadastrar produto">
    </form>
    <p>Produtos cadastrados:</p>
    <?php
    include "tabela.php";
    exibirProdutos();
    ?>

    <script>
        function atualizarDados(id){
            let classValor = document.getElementsByClassName(id);
            let nome = classValor[0].value;
            let quantidade = classValor[1].value;
            let valor = classValor[2].value;

            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", "update.php");
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send("id=" + id + "&nome=" + nome + "&quantidade=" + quantidade + "&valor=" + valor);
        }
    
        function apagarDados(id){
            const xh = new XMLHttpRequest();
            xh.open("POST", "delete.php");
            xh.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xh.send("id=" + id);
            xh.onload = function() {
                if (xh.status == 200) {
                    location.reload();
                }
                }
        }
    </script>
</body>
</html>