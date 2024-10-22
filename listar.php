<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .produto {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .preco {
            font-weight: bold;
            color: #007BFF;
        }
        .btn {
            margin-right: 5px;
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 3px;
        }
        .btn-excluir {
            background-color: #dc3545; /* Cor para o botão de excluir */
        }
    </style>
</head>
<body>
    <h1>Lista de Produtos Cadastrados</h1>

    <?php
    include 'conexao.php'; // Inclui a conexão

    // Consulta para buscar os produtos
    $sql = "SELECT id, nome_produto, preco FROM produtos";
    $result = $conn->query($sql);

    // Verifica se existem produtos
    if ($result->num_rows > 0) {
        // Exibe os dados um embaixo do outro
        while ($row = $result->fetch_assoc()) {
            echo "<div class='produto'>";
            echo "<strong>ID:</strong> " . $row["id"] . "<br>";
            echo "<strong>Nome do Produto:</strong> " . $row["nome_produto"] . "<br>";
            echo "<span class='preco'>Preço: R$ " . number_format($row["preco"], 2, ',', '.') . "</span><br>";
            echo "<br>";
            echo "<a href='editar.php?id=" . $row["id"] . "' class='btn'>Editar</a>";
            echo "<a href='excluir.php?id=" . $row["id"] . "' class='btn btn-excluir'>Excluir</a>";
            echo "</div>";
        }
    } else {
        echo "Nenhum produto cadastrado.";
    }

    // Fecha a conexão
    $conn->close();
    ?>
</body>
</html>
