<?php

    class usuarioController{
        private $id;
        private $nome;
        private $email;
        private $senha;

        public function getNome(){
            return $this->nome;
        }
        public function setNome(){
            return $this->nome = $nome;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail(){
            return $this->email = $email;
        }
        public function getSenha(){
            return $this->senha;
        }
    }
?>