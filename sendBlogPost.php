<?php
require 'databaseConnection.php';
require 'functions.php';
session_start();

if(isset($_POST['submit_post'])){
    
    $user_id = $_SESSION['user_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $insertPost = "INSERT INTO blog_posts (user_id, title, content)
                   VALUES (:user_id, :title, :content)";
    $execPost = $pdo->prepare($insertPost);
    
    $execPost->bindValue(':user_id', $user_id);
    //from functions.php
    $execPost->bindValue(':title', parsePOSTData($title));
    $execPost->bindValue(':content',  parsePOSTData($content));
    
    $execPost->execute();
    //
    echo '<script>window.location.replace("blogPage.php");</script>';
    // exit;
}
?>