<?php
    include_once "../conexao/Conexao.php";

    $bancodedados = new Conexao();
    $conexao = $bancodedados->getConexao();
    $op = new ordemProducao();
    $opDAO = new opDAO();

    try {
        if(isset($_POST['cadastrarOP'])){

            $op->setNumOP($_POST['numop']);
            $op->setRelprd($_POST['relprd']);
            $op->setNomeUsina($_POST['nomeusina']);

            $opDAO->createOP($op);
        }
    } catch (Exception $e) {
        echo 'Erro ao cadastrar nova ordem de produção'.$e;
    }

?>