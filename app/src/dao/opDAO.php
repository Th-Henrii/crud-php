<?php
   class opDAO{
    public function createOP(ordemProducao $op){
        try {
            $sql = "INSERT INTO ordensproducao (numop, relprd, nomeUsina)
                    VALUES (:numop, :relprd, :nomeUsina)";
            

            $p_sql = Conexao::getConexao()->prepare($sql);

            $p_sql->bindValue(":numop", $op->getNumOP(), PDO::PARAM_STR); 
            $p_sql->bindValue(":relprd", $op->getRelprd(), PDO::PARAM_STR);
            $p_sql->bindValue(":nomeusina", $op->getNomeUsina(), PDO::PARAM_STR);

            return $p_sql->execute();
        } catch (Exception $e) {

            echo "Não foi possível cadastrar OP: " . $e->getMessage();
        }
    }
    public function readOP() {
        try {
            $sql = "SELECT * FROM ordensproducao order by idOP asc";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaOP($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar." . $e;
        }
    }
}
?>