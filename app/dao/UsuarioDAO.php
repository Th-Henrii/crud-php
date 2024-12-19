<?php
    class UsuarioDAO{
        public function create(Usuario $usuario) {
            try {
                $sql = "INSERT INTO usuarios (                   
                      nome,email,senha)
                      VALUES (
                      :nome,:email,:senha)";
    
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nome", $usuario->getNome());
                $p_sql->bindValue(":email", $usuario->getEmail());
                $p_sql->bindValue(":senha", $usuario->getSenha());
                
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Erro ao Inserir usuario <br>" . $e . '<br>';
            }
        }
        public function read() {
            try {
                $sql = "SELECT * FROM usuarios order by id asc";
                $result = Conexao::getConexao()->query($sql);
                $lista = $result->fetchAll(PDO::FETCH_ASSOC);
                $f_lista = array();
                foreach ($lista as $l) {
                    $f_lista[] = $this->listaUsuarios($l);
                }
                return $f_lista;
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            }
        }
        public function update(Usuario $usuario) {
            try {
                $sql = "UPDATE usuarios set
                    
                      nome=:nome,
                      email=:email,
                      senha=:senha                
                                                                           
                      WHERE id = :id";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":nome", $usuario->getNome());
                $p_sql->bindValue(":email", $usuario->getEmail());
                $p_sql->bindValue(":senha", $usuario->getSenha());
                $p_sql->bindValue(":id", $usuario->getId());
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
            }
        }
    
        public function delete(Usuario $usuario) {
            try {
                $sql = "DELETE FROM usuarios WHERE id=:id";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":id", $usuario->getId());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir usuario<br> $e <br>";
            }
        }
        private function listaUsuarios($row) {
            $usuario = new Usuario();
            $usuario->setId($row['id']);
            $usuario->setNome($row['nome']);
            $usuario->setEmail($row['email']);
            $usuario->setSenha($row['senha']);
    
            return $usuario;
        }
     }
?>