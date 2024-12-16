<?php
include_once "../conexao/Conexao.php";

   $bancodedados = new Conexao();
   $conexao = $bancodedados->getConexao();
   try {
         //requisição para logar
         if(isset($_POST['login'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $query = "SELECT id, nome FROM usuarios WHERE email='$email' and senha='$senha'";
            $resultado = $conexao->query($query);
            $logado = $resultado->fetch(PDO::FETCH_ASSOC);
            $nomeLogado = $logado['nome'];
            if ($logado != null) {
               session_start();
               $_SESSION['id_usuario_logado'] = $logado['id'];    // Salva o ID do usuário
               $_SESSION['nome_usuario'] = $logado['nome'];
               header("Location:../main.php");
               exit();
            } 
            else{
               // Usuário ou senha inválida
               header('Location:login.php');
            }
         }
      } catch (Exception $e) {
         echo 'Erro ao logar'.$e;
   }
?>
