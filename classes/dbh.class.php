<?php

class Dbh
{
    private $host = "localhost";
    private $user = "id18415500_products1";  // root
    private $pwd = "ct\Y]>&M|6w)OE#B"; // ""
    private $dbName = "id18415500_products_crud1"; // products_crud

    protected function connect()
    {
        $dsn = "mysql:host=" . $this->host . ';dbname=' . $this->dbName;
        try {
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $pdo;
    }
}
