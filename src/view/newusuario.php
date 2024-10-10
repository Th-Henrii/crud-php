<?php
include_once ('../../config/config.php');
include_once('../dao/usuarioDAO.php');
include_once('../model/usuario.php');


//instancia as classes
$usuario = new Usuario();
//$usuariodao = new UsuarioDAO();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/newusuario.css">
    <title>Projeto Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Registre-se</h2>
                        <form method="POST" action="?page=register">
                            <input type="hidden" name="register" value="register"> 
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="email" placeholder="Digite seu sobrenome" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder= "Digite seu E-mail" required>
                            </div>
                            <!--<div class="mb-3">
                                <label for="password" class="form-label">Confirme sua senha</label>
                                <input type="password" class="form-control" id="password" placeholder="Confirme sua senha" required>
                            </div>-->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Registrar-se</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        body{
            background-color: whitesmoke;
        }
        .card-body{
            box-shadow: 8px 10px 10px black;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
