<?php
session_start();
include_once "conexao/Conexao.php";
include_once "dao/UsuarioDAO.php";
include_once "model/Usuario.php";
//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Tarefas</title>
</head>
<body>
    <?php echo $_SESSION['nome_usuario'];?>
</body>
</html>