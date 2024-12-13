<?php
    include_once __DIR__ . '/../config/config.php';
    include_once __DIR__ . '/../Controllers/usuarioController.php';
    $usuario = new Usuario();
    $conexaoObj = new Conexao();
    $conn = $conexaoObj->getConexao();
    class usuarioModel{
        public function create($usuario) {
            try {
                $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
                $stmt = $conn->prepare($sql); 
                $stmt->bindValue(':nome', $usuario->nome);
                $stmt->bindValue(':email', $usuario->email);
                $stmt->bindValue(':senha', $usuario->senha);
                $stmt->execute();
                echo "Usuário criado com sucesso!";
            } catch (PDOException $e) {
                echo "Erro ao criar usuário: " . $e->getMessage();
            }
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
                echo "Ocorreu um erro ao tentar buscar usuarios." .$e->getMessage();
            }
        }
        public function delete(Usuario $usuario) {
            try {
                $sql = "DELETE FROM usuarios WHERE id = :id";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":id", $usuario->getId());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir usuario<br>".$e->getMessage();
            }
        }
    }
?>