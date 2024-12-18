<?php
    class ordemProducao(){
        private $numop;
        private $relprd;
        private $nomeUsina;

        private function __constructOP($numop, $relprd, $nomeUsina){
            $this->numop = $numop;
            $this->relprd = $relprd;
            $this->nomeUsina = $nomeUsina;
        }
        public function getNumOP(){
            return $this->numop;
        }
        public function getRelprd(){
            return $this->relprd;
        }
        public function getNomeUsina(){
            return $this->nomeUsina;
        }
        public function setNumOP(){
            $this->numop = $numop;
        }
        public function setRelprd(){
            $this->relprd = $relprd;
        }
        public function setNomeUsina(){
            $this->nomeUsina = $nomeUsina;
        }
    }
?>