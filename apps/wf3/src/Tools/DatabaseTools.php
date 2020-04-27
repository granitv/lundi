<?php


namespace App\Tools;
use PDO;

class DatabaseTools
{

    private $host;
    private $dbName;
    private $user;
    private $password;

    private $dsn;

    private $pdo;
    public function __construct($host, $dbName, $user, $password)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;

        $this->dsn = "mysql:host=$host;dbname=$dbName";
        $this->initDatabase();
    }

    public function initDatabase(){
            $this->pdo = new PDO($this->dsn, $this->user, $this->password);
    }

    public function executeQuery($SQL){
        $result = $this->pdo->query($SQL);
        return $result->fetchAll();
    }

    public function executepreparedQuery($query, $params){

    }

}