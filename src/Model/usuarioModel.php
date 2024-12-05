<?php
    require_once(__DIR__ . '/../config/config.php');
    require_once(__DIR__ . '/../Controllers/usuarioController.php');
    require_once(__DIR__ . '/../UsuarioDAO/usuarioDAO.php');

    $bancodedados = new Conexao();
    $conec = $bancodedados->getConnection();

    $usuario = new usuarioController();
    $usuariodao = new UsuarioDAO();

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
    //else if(isset($_POST['editar'])){
    
     //   $usuario->setNome($d['nome']);
     //   $usuario->setSobrenome($d['sobrenome']);
     //   $usuario->setIdade($d['idade']);
      //  $usuario->setSexo($d['sexo']);
      //  $usuario->setId($d['id']);
    
     //   $usuariodao->update($usuario);
    
      //  header("Location: ../../");
   // }
    // se a requisição for deletar
    else if(isset($_GET['del'])){
    
        $usuario->setId($_GET['del']);
    
        $usuariodao->delete($usuario);
    
        header("Location: ../../");
    }else{
        header("Location: ../../");
    }
?>