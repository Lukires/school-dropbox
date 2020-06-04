<?php
session_start();
?>
<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1 class="header">YourVault - Account Page</h1>
        <div class="loginbox shadow-lg p-3 mb-5 bg-white rounded">
        <form method="post" action="api/user.php">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
            <button type="submit" name="register" class="btn btn-secondary">Register</button>
        </form>
</div>
    </body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
        const query = window.location.search;
        if (query.includes("?register=false")) {
            alert("Dette brugernavn er allerede taget");
        }
        if (query.includes("?login=false")) {
            alert("Der findes ikke en bruger med denne kode");
        }
        </script>
</html>