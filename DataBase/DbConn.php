<?php

class DbConn
{
    private $host = "localhost";
    private $user = "postgres";
    private $pass = "123";
    private $dbname = "mini-anime-shop";
    private $pdo;

    public function __construct(){

        $dsn = "pgsql:host=$this->host;dbname=$this->dbname";

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Ошибка подключения: " . $e->getMessage();
        }

    }

    public function getConnection(){
        return $this->pdo;
    }
}