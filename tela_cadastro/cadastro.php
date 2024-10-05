<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .message {
            text-align: center;
            margin-bottom: 20px;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Produtos</h1>

    <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'success'): ?>
        <div class="message">Produto cadastrado com sucesso!</div>
        <?php unset($_SESSION['status']);  ?>
    <?php endif; ?>

    <form action="cadastrar.php" method="post">
        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" id="nome_produto" name="nome_produto" required>

        <label for="preco_compra">Preço de Compra:</label>
        <input type="number" id="preco_compra" name="preco_compra" step="0.01" required>

        <label for="preco_venda">Preço de Venda:</label>
        <input type="number" id="preco_venda" name="preco_venda" step="0.01" required>

        <label for="codigo_produto">Código do Produto:</label>
        <input type="text" id="codigo_produto" name="codigo_produto" required>

        <label for="nome_fornecedor">Nome do Fornecedor:</label>
        <input type="text" id="nome_fornecedor" name="nome_fornecedor" required>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
