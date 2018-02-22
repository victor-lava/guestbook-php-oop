<?php

class Database {

    private $host;
    private $dbName;
    private $username;
    private $password;

    public function __construct() {

        $this->host = 'localhost';
        $this->dbName = 'guestbook';
        $this->username = 'root';
        $this->password = 'root';

    }

    public function connect() {

        $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
        $pdo->exec('SET NAMES UTF8');

        return $pdo;
    }


}
?>
