<?php
class Conexao {
    public $servername = "localhost";
    public $dbName = "crudphp";
    public $username = "root";
    public $password = "";

    public static function getConexao() {
        try {
            $servername = "localhost";
            $dbName = "crudphp";
            $username = "root";
            $password = "";
            
            $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conectado!";
        } catch (PDOException $e) {
            echo "Conexao falhou! - " . $e->getMessage();
        }
        return $conn;
    }
}
?>
