<?php
class Conexao {
    const Host = 'localhost';
    const User = 'root';
    const Pass = '';
    const Base = 'projeto-site';
    
    // Cria e retorna a conexão
    function setConn() {
        $this->conn = new mysqli(self::Host, self::User, self::Pass, self::Base);
        
        // Verifica se a conexão foi bem-sucedida
        if ($this->conn->connect_error) {
            die("ERRO de conexão: " . $this->conn->connect_error);
        } else {
            print("<script>alert('Conexão bem-sucedida!')</script>");
        }

        return $this->conn;
    }
}

// Instancia a classe e cria a conexão
$conexao = new Conexao();
$conn = $conexao->setConn();
?>
