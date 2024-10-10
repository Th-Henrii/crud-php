<?php
include_once "../config/config.php";
include_once "../modelo/usuario.php";
include_once "../DAO/usuarioDAO.php";

//instacia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nesta condição
if(isset($_POST['cadastrar'])){

    $usuario->setNome($d['nome']);
    $usuario->setSobrenome($d['sobrenome']);
    $usuario->setEmail($d['email']);

    $usuariodao->create($usuario);
    header("Location ../../");
}
//se a requisição for editar
elseif (isset($_POST['editar'])) {
    $usuario->setNome($d['nome']);
    $usuario->setSobrenome($d['sobrenome']);
    $usuario->setEmail($d['idade']);
    

    $usuariodao->update($usuario);

    header("Location: ../../");
}
//se a requisição for editar
else if(isset($_GET['del'])){

    $usuario->setId($_GET['del']);

    $usuariodao->delete($usuario);

    header("Location: ../../");
}else{
    header("Location: ../../");
}
?>