<?php
include 'conexao.php'; // Inclui a conexão

// Captura os dados do formulário
$nome_produto = $_POST['nome_produto'];
$preco = $_POST['preco'];

// Prepara e vincula
$stmt = $conn->prepare("INSERT INTO produtos (nome_produto, preco) VALUES (?, ?)");
$stmt->bind_param("sd", $nome_produto, $preco);

// Executa a inserção
if ($stmt->execute()) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto: " . $stmt->error;
}

// Fecha a conexão
$stmt->close();
$conn->close();
?>
