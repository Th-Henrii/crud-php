<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/ordemProducao.php";
    include_once "../dao/opDAO.php";

    $bancodedados = new Conexao();
    $conexao = $bancodedados->getConexao();
    $op = new ordemProducao();
    $opDAO = new opDAO();

    if(isset($_POST['cadastrar'])){

        $op->setNumOP($_POST['numop']);
        $op->setRelprd($_POST['relprd']);
        $op->setNomeUsina($_POST['nomeusina']);

        $opDAO->createOP($op);
        header("Location: ../main.php/?page=ordensdeproducao");
    }
?>