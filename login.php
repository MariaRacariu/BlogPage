<?php
require 'databaseConnection.php';
require 'functions.php';
session_start();
//fetch information from database
//fetch input from user
//see if data matches


if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $fetchUser = "SELECT username, password, user_id FROM users WHERE email = :email";
    $start = $pdo->prepare($fetchUser);

    //from functions.php
    $start->bindValue(':email', parsePOSTData($email));
    $start->execute();
    
    $result = $start->fetch(PDO::FETCH_ASSOC);
    
    if($result === false){
        echo 'This is not a valid email';
    }else{
        if(parsePOSTData($password) !== $result['password']){
            echo 'This is not a valid password';
        }else{
            $_SESSION['username']= $result['username'];
            $_SESSION['user_id']= $result['user_id'];
            echo '<script>window.location.replace("index.php");</script>';
            // exit;
        }
    }
}