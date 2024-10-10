<?php
    //Definida a classe usuario, e as variaveis necessárias para executar as querys posteriormente.
    class Usuario{
        private $id;
        private $nome;
        private $sobrenome;
        private $email;
        private $senha;
    }

    //Funções sao utilizadas para retornar as informações dos campos id, nome, sobrenome e email a partir dos forms.
    function getID() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getEmail(){
        return $this->email;
    }
   // function getSenha(){
   //     return $this->senha;
   // }

    //Funções utilizadas para atribuir as informações a cada campo conrespondente.
    function setID(){
        $this->id = $id;
    }

    function setNome(){
        $this->nome = $nome;
    }

    function setSobrenome(){
        $this->sobrenome = $sobrenome;
    }

    function setEmail(){
        $this->email = $email;
    }
    //function setSenha(){
      //  $this->senha = $senha;
    //}
?>