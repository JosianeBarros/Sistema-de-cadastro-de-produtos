# Sistema de cadastro de produtos
Este é um sistema de cadastro de produtos feito para funcionar em um navegador web. Ele foi feito usando HTML, CSS, JavaScript, PHP e o MySQL como banco de dados.

Artigo onde eu explico o processo de criação do sistema: [Criando sistema de cadastro de produtos com PHP e MySQL](https://medium.com/@josianebarros/criando-sistema-de-cadastro-de-produtos-com-php-e-mysql-462f3e99be66)

# Requisitos
Ter o XAMPP instalado.

# Instalação
Para instalar esse projeto você pode clonar o repositório:

```
git clone https://github.com/JosianeBarros/Sistema-de-cadastro-de-produtos.git
```

É necessário ter um banco de dados com o nome `cadastroProdutos`, e dentro dele deve ter a tabela `produtos`, para cria-lá use:

```
CREATE TABLE produtos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL,
    valor DECIMAL(10,2) NOT NULL
)
```

# Imagens
![image](https://github.com/JosianeBarros/Sistema-de-cadastro-de-produtos/assets/108816336/c06e8315-9a00-4588-988a-f9960bc25be0)

![image](https://github.com/JosianeBarros/Sistema-de-cadastro-de-produtos/assets/108816336/835d10bb-8162-4fa1-a088-45bd60d9f961)
