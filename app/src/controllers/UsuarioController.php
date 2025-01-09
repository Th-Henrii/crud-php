<?php
include_once "../conexao/Conexao.php";
include_once "../model/Usuario.php";
include_once "../dao/UsuarioDAO.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();


//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $usuario->setNome($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);

    $usuariodao->create($usuario);

    header("Location: ../views/gestaoDeUsuarios.php");
} 
// se a requisição for editar
else if(isset($_POST['editar'])){

    $usuario->setNome($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setId($_POST['id']);

    $usuariodao->update($usuario);

    header("Location: ../views/gestaoDeUsuarios.php");
}
// se a requisição for deletar
else if(isset($_GET['del'])){

    $usuario->setId($_GET['del']);

    $usuariodao->delete($usuario);

    header("Location: ../views/gestaoDeUsuarios.php");
}else{
    header("Location: ../../");
}