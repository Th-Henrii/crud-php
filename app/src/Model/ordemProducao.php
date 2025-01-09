<?php
    class ordemProducao {
        private $idOP;
        private $numop;
        private $relprd;
        private $nomeUsina;
    
        
        public function __constructOP($idOP = null, $numop = null, $relprd = null, $nomeUsina = null) {
            $this->idOP = $idOP;
            $this->numop = $numop;
            $this->relprd = $relprd;
            $this->nomeUsina = $nomeUsina;
        }
        public function getNumOP() {
            return $numop;
        }
    
        public function getRelprd() {
            return $relprd;
        }
    
        public function getNomeUsina() {
            return $nomeUsina;
        }
        public function getIdOP() {
            return $idOP;
        }
        public function setNumOP($numop) {
            $this->numop = $numop;
        }
    
        public function setRelprd($relprd){
            $this->relprd = $relprd;
        }
        public function setNomeUsina($nomeUsina){
            $this->nomeUsina = $nomeUsina;
        }
        public function setIdOP($idOP){
            $this->idOP = $idOP;
        }
    }
    
?>