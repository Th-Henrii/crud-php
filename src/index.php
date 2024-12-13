<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Tarefas</title>
</head>
<body>
<style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 500px;
    text-align: center;
}

h1 {
    font-size: 24px;
    margin-bottom: 40px;
    color: #333;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input {
    width: 80%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
    </style>
    <div class="form-container">
        <h1>Cadastro</h1>
        <form action="validationForm/validationUser.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha">

            <button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
        </form>
    </div>
</body>
</html>
<?php
    include_once 'config/config.php';
    include_once "Model/usuarioModel.php";
    include_once "Controllers/usuarioController.php";
    // Criando uma conexão
    try {
        $conexaoObj = new Conexao();
        $conexao = $conexaoObj->getConexao();
    } catch (Exception $e) {
        echo "Erro ao conectar: " . $e->getMessage();
    }
    $usuario = new Usuario();
    $usuarioModel = new usuarioModel();
?>  