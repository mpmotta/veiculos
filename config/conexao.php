<?php
namespace App\Config;
use PDO;
use PDOException;
class Conexao {
    private $host = "localhost";
    private $db_name = "veiculos";
    private $username = "root";
    private $password = "";
    public $conn;
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }
        return $this->conn;
    }
}
