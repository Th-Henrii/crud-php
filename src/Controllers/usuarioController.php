<?php
    class Usuario{
        private $id;
        private $nome;
        private $email;
        private $senha;
        public function construtor($id,$nome, $email, $senha) {
            $this->id;
            $this->nome;
            $this->email;
            $this->senha;
        }
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
        public function setSenha(){
            return $this->senha = $senha;
        }
        public function setID(){
            return $this->id = $id;
        }
    }
?>