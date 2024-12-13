<?php
include_once "../config/config.php";
include_once "../Model/usuarioModel.php";
include_once "../Model/usuarioController.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new usuarioModel();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $usuario->setNome($d['nome']);
    $usuario->setEmail($d['email']);
    $usuario->setSenha($d['senha']);

    $usuariodao->create($usuario);

    header("Location: ../../");
} 
// se a requisição for editar
else if(isset($_POST['editar'])){

    $usuario->setNome($d['nome']);
    $usuario->setEmail($d['email']);
    $usuario->setSenha($d['senha']);
    $usuario->setId($d['id']);

    $usuariodao->update($usuario);

    header("Location: ../../");
}
// se a requisição for deletar
else if(isset($_GET['del'])){

    $usuario->setId($_GET['del']);

    $usuariodao->delete($usuario);

    header("Location: ../../");
}else{
    header("Location: ../../");
}
?>