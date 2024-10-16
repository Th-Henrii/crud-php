<?php
class Conexao {
    private static $instance;

    public static function getConexao() {
        if (!isset(self::$instance)) {
            try {
                // O primeiro parâmetro deve ser o DSN, e não apenas o host
                $dsn = 'mysql:host=localhost;dbname=projeto-site'; // Corrigido
                $username = 'root'; // Seu nome de usuário
                $password = ''; // Sua senha (vazia, se você não configurou uma)
                $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

                // Passamos apenas os 4 parâmetros corretos
                self::$instance = new PDO($dsn, $username, $password, $options);
            } catch (PDOException $e) {
                die("Erro ao conectar: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>
