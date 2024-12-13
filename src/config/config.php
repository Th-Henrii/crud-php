<?php
class Conexao {
    private static $conn;

    public static function getConexao() {
        if (!self::$conn) {
            try {
                self::$conn = new PDO('mysql:host=localhost;dbname=crudphp', 'root', '');
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro de conexão: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
?>
