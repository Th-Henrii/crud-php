<?php
    include_once __DIR__ . '/../config/config.php';
    include_once __DIR__ . '/../Controllers/usuarioController.php';
    $usuario = new Usuario();
    $conexao = Conexao::getConexao();
    class usuarioModel{
        public $conn;
        public $stmt;
        public function construct($conn, $stmt) {
            $this->conn = $conn;
            $this->stmt = $stmt;
        }
        public function create($usuario) {
            try {
                $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':nome', $usuario->getNome());
                $stmt->bindValue(':email', $usuario->getEmail());
                $stmt->bindValue(':senha', password_hash($usuario->getSenha(), PASSWORD_DEFAULT));
                $stmt->execute();
                echo "Usuário criado com sucesso!";
                header("location:gestãoDeUsuarios.php");
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
        public function delete($usuario) {
            try {
                $sql = "DELETE FROM usuarios WHERE id = :id";
                $p_sql = Conexao::getConexao()->prepare($sql);
                $p_sql->bindValue(":id", $usuario->getId());
                return $p_sql->execute();
            } catch (Exception $e) {
                echo "Erro ao Excluir usuario<br>".$e->getMessage();
            }
        }
        public function closeSTMT ($stmt){
            return $stmt->close();
        }
        public function closeConn($conn){
            return $conn->close();
        }
}
?>