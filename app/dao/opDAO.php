<?php
    class opDAO(){
        public function createOP(ordemProducao $op){
            try{
            $sql = "INSERT INTO ordensdeproducao (numop, relprd, nomeusina) VALUES (:numop, :relprd, :nomeusina)";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql = bindValue(":numop", $op->getNumOP());
            $p_sql = bindValue(":relprd", $op->getRelprd());
            $p_sql = bindValue(":nomeusina", $op->getNomeUsina());

            return $p_sql->execute();
            }catch(Exception $e){
                echo "Não foi possivel cadastrar OP".$e;
            }
        }
    }

?>