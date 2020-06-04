<?php

class Database {
    private static $instance = null;

    private $host = "localhost";
    private $database = "yourvault";
    private $username = "root";
    private $password = "";
    private $conn = null;

    private function __construct()
    {
      $host = "localhost";
      $database = "yourvault";
      $username = "root";
      $password = "";
      
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
      $this->createTables();
    }

    function createTables() {
      $this->conn->prepare('CREATE TABLE IF NOT EXISTS users (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, name VARCHAR(64) NOT NULL, password varchar(72))')->execute();
    }

    public function getRow($statement, $array) {
      $stmt = $this->conn->prepare($statement);
      $stmt->execute($array);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }

    public function insertRow($statement, $array) {
      $this->conn->prepare($statement)->execute($array);
    }

    public static function getInstance()
    {
      if (self::$instance == null)
      {
        self::$instance = new Database();
      }
   
      return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }

  }

?>