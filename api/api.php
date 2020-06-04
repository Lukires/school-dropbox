<?php

include "db.php";

class API {
    private static $instance = null;
    private $db = null;

    private function __construct()
    {
        $db = Database.getInstance();
    }
    public static function getInstance()
    {
      if (self::$instance == null)
      {
        self::$instance = new API();
      }
   
      return self::$instance;
    }

  }

?>
