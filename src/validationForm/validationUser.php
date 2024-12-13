<?php 
    include_once __DIR__ . '/../config/config.php';
    include_once __DIR__ . '/../Model/usuarioModel.php';
    include_once __DIR__ . '/../Controllers/usuarioController.php';
    $usuario = new Usuario();
    $usuarioModel = new usuarioModel();
    $d = filter_input_array(INPUT_POST);
    //Condição para cadastrar um novo usuario, junto com algumas validações de campos vazios.
    if(isset($_POST['cadastrar'])){
        if (empty($_POST["nome"])) {
            $nameErr = "Por favor preencha seu nome!";
          } else {
            $usuario->setNome($d['nome']);
          }
        if(empty($_POST["email"])){
            $emailErr = "Por favor preencha seu e-mail!";
        }else{
            $usuario->setEmail($d['email']);
        }
        if(empty($_POST["senha"])){
            $emailErr = "Por favor preencha uma senha!";
        }else{
            $usuario->setSenha($d['senha']);
        }
        $usuarioModel->create($usuario);
        header("Location: ../../");
    }
    //Codição para editar um usuario ja cadastrado
    elseif (isset($_POST['editar'])){
        $usuario->setNome($d['nome']);
        $usuario->setNome($d['email']);
        $usuario->setNome($d['senha']);
        $usuarioModel->update($usuario);
        header("Location: ../../");
    }
    //Se a requisição for deletar
    elseif (isset($_POST['deletar'])) {
        $usuario->setID($d['id']);
        $usuarioModel->delete($usuario);
    }else{
        header("Location: ../../");
    }
?>