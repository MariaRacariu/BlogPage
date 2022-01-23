<?php
//Create database connection
//fetch database username and password
//check if it is correct
require 'login.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php' ?>
    <form method="post" action="login.php">
        <div class="form-group">
            <label for="emailInput">Email address:</label>
            <input type="text" id="emailInput" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="passwordInput">Password:</label>
            <input type="password" id="passwordInput" name="password" placeholder="Enter password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <?php include 'footer.php' ?>
</body>
</html>