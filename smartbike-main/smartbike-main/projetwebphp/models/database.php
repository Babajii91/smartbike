<?php
class Database
{
    private $host = "51.158.59.186:14301";
    private $database = "jrkt";
    private $username = "phppex";
    private $password = "Supermotdepasse!42";
    public $conn;

    public function getConnection(){
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->database,
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->conn;
    }

 }
 ?>