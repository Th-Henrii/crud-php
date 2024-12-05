<?php
    include 'config/config.php';
    include 'Controllers/usuarioController.php';
    include 'UsuarioDAO/usuarioDAO.php';

    //instacia a conexão com banco de dados
    $bancodedados = new Conexao();
    $conec = $bancodedados->getConnection();

    $usuarioControllers = new usuarioController();
    $usuarioDAO = new usuarioDAO();
?>  
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-container">
        <h1>Cadastro</h1>
        <form action="Model/usuarioModel.php" method="POST">
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
