<?php
    class newUsuario{
        public function createUsuario(Usuario $usuario){
            try{
                $sql = "INSERT INTO usuarios(nome,sobrenome,email) VALUES (:nome,:sobrenome:email)";
                
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql = bindValue(":nome", $usuario->getNome());
                $p_sql = bindValue(":sobrenome", $usuario->getSobrenome());
                $p_sql = bindValue(":email", $usuario->getEmail());


                return $p_sql->execute();
            }catch(Exception $e){
                print "Erro ao Inserir usuario <br>" . $e . '<br>';
            }
        }

        public function readUsuario(){
            try{
                $sql = "SELECT * FROM usuarios order by nome asc";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach($lista as $l){
                    $f_lista[] = $this->listarUsuarios($l);
                }
                return $f_lista;
            }catch(Exeception $e){
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }

        public function update(Usuario $usuario) {
            try {
                $sql = "UPDATE usuario set
                    
                      nome=:nome,
                      sobrenome=:sobrenome,
                      email=:idade               
                                                                           
                      WHERE id = :id";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nome", $usuario->getNome());
                $p_sql->bindValue(":sobrenome", $usuario->getSobrenome());
                $p_sql->bindValue(":email", $usuario->getEmail());
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }
        public function delete(Usuario $usuario) {
            try {
                $sql = "DELETE FROM usuario WHERE id = :id";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":id", $usuario->getId());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir usuario<br> $e <br>";
            }
        }

        private function listarUsuarios($row){
            $usuario = new Usuario();
            $usuario->setID($row['id']);
            $usuario->setNome($row['nome']);
            $usuario->setSobrenome($row['sobrenome']);
            $usuario->setEmail($row['email']);

            return $usuario;
        }
    }
?>
