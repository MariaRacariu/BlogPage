<?php
include 'databaseConnection.php';
//--------------- SELECT POSTS --------------- \\
//pdo prepare sql string to select posts from blogs table
$fetchPosts = $pdo->prepare("SELECT title, date_length, position FROM jobs_and_education");
//run sql string after prepare
$fetchPosts->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="style_about.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <?php 
            while($rowPosts = $fetchPosts->fetch()){
                ?>
                    <div class="grid">
                        <h3><?= $rowPosts['title'] ?></h3>
                        <p><?= $rowPosts['position'] ?></p>
                        <p class="date"><?= $rowPosts['date_length'] ?></p>
                    </div>
                <?php
            }
        ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>