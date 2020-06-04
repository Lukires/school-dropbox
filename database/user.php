<?php 
session_start();
include "db.php";

class User {

    private $id;
    private $name;

    public function __construct($id) {
        $this->$id;
    }

    public function getName() {

    }

    public function getID() {

    }

    public function getSession() {

    }


    public static function getUserFromName($name){
        //get id from db
    }

    public static function login($name, $password) {
        $row = Database::getInstance()->getRow("SELECT * FROM users WHERE name=?", array($name));
        while($row) {
            if (password_verify($password, $row["password"])){
                $_SESSION["user"] = $name;
                $_SESSION["id"] = $row["id"]; 
                return true;
            }
            return false;
        }

    }
    public static function registerUser($name, $password) {
        $password = password_hash($password, PASSWORD_BCRYPT);
        if (User::userExists($name)) {
            return false;
        }
        Database::getInstance()->insertRow("INSERT INTO users (name, password) VALUES(?,?)", array($name, $password));
        return true;
    }

    public static function userExists($name) {
        $row = Database::getInstance()->getRow("SELECT * FROM users WHERE name=?", array($name));
        return $row;
    }
}

?>