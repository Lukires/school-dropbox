<?php
session_start();
if(isset($_SESSION["user"])) 
    {
        //is user valid
        header("Location:dashboard.php");
    }else{
        header("Location:login.php");
    }
    
?>