<?php
include 'databaseConnection.php';
session_start();

//--------------- SELECT POSTS --------------- \\
//pdo prepare sql string to select posts from blogs table
$fetchPosts = $pdo->prepare("SELECT title, user_id, date, content FROM blog_posts");
//run sql string after prepare
$fetchPosts->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Page</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <div>
            <?php 
            if(isset($_SESSION['user_id'])){
                ?>
                <a class="btn btn-primary" href="postBlog.php" role="button">Write a new blog post</a>
                <?php
            }
            ?>
        </div>
        <div>
            <?php
            //Repeat for each row found from sql above
            while($rowPosts = $fetchPosts->fetch()){

                $fetchUsername = $pdo->prepare("SELECT username FROM users WHERE user_id = :user_id");
                $fetchUsername->bindValue(':user_id', $rowPosts['user_id']);

                $fetchUsername->execute();
                $username = $fetchUsername->fetch();

                $datePosted = date("Y-m-d", strtotime($rowPosts['date']));
                ?>
                <h2><?= $rowPosts['title'] ?></h2>
                <p><?= $username[0] ?></p>
                <p><?= $datePosted ?></p>
                <p><?= $rowPosts['content'] ?></p>
                <?php
            }
            ?>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>