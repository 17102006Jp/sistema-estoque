<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Produtos</title>
</head>
<body>
    <h1>Formulário de Cadastro de Produtos</h1>
    <form action="processa.php" method="post">
        Nome do Produto: <input type="text" name="nome_produto" required><br>
        Preço: <input type="number" name="preco" step="0.01" required><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
