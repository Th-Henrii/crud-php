<?php
    require_once '../config/config.php';
    require_once 'Controllers/usuarioController.php';

    class usuarioDAO{

        public function create(){
            try{
                $sql = "INSERT INTO usuarios(nome,email,senha) VALUES (
                  :nome,:email,:senha)";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql = bindValue(":nome",$usuario->getName());
                $p_sql = bindValue(":email",$usuario->getEmail());
                $p_sql = bindValue(":senha",$usuario->getSenha());
            }
            return $p_sql->execute();
            } catch (Exception $e) {
            print "Erro ao Inserir usuario <br>" . $e . '<br>';
        }
        public function read(){
            try {
                $sql = "SELECT * FROM usuarios order by nome asc";
                $resultRead = Conexao::getConexao()->query($sql);
                $lista = $resultRead->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaUsuarios($l);
                }
                return $f_lista;

            } catch (Exeception $e) {
                print "Ocorreu um erro ao tentar buscar usuarios." . $e;
            }
        }
        public function delete(Usuario $usuario) {
            try {
                $sql = "DELETE FROM usuarios WHERE id = :id";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":id", $usuario->getId());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir usuario<br> $e <br>";
            }
        }
    }
?>