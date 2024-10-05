<?php
session_start(); // Inicia a sessão

$servername = "localhost";
$username = "root"; // padrão do XAMPP
$password = ""; // geralmente em branco no XAMPP
$dbname = "desafio_erik"; // altere para o nome do seu banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter dados do formulário
$nome_produto = $_POST['nome_produto'];
$preco_compra = $_POST['preco_compra'];
$preco_venda = $_POST['preco_venda'];
$codigo_produto = $_POST['codigo_produto'];
$nome_fornecedor = $_POST['nome_fornecedor'];

// Inserir dados na tabela
$sql = "INSERT INTO produtos (nome_produto, preco_compra, preco_venda, codigo_produto, nome_fornecedor)
VALUES ('$nome_produto', $preco_compra, $preco_venda, '$codigo_produto', '$nome_fornecedor')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['status'] = 'success'; // Armazena a mensagem na sessão
    header("Location: cadastro.php");
    exit();
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar conexão
$conn->close();
?>
