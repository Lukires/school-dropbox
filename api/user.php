<?php 
session_start();
        include "../database/user.php";
        if(isset($_POST['register'])) {
            if (User::registerUser($_POST['name'], $_POST['password'])) {
                User::login($_POST['name'], $_POST['password']);
                header("Location:../dashboard.php");
                return;
            }else{
                header("Location:../login.php?register=false");
                return;
            }
        }else if (isset($_POST['login'])) {
            if(User::login($_POST['name'], $_POST['password'])) {
                header("Location:../dashboard.php");
                return;
            }else{
                header("Location:../login.php?login=false");
                return;
            }
        }

         ?>