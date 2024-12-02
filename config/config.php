<?php
class Conexao {
    private $host = 'localhost';
    private $dbName = 'crudPhp';
    private $username = 'root';
    private $password = '';
    private $conn;

    // Método para obter a conexão
    public function getConnection() {
        $this->conn;

        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo("Conectado!");
        } catch(PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }

        return $this->conn;
    }
}
?>