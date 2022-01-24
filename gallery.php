<?php
include 'databaseConnection.php';
//--------------- SELECT POSTS --------------- \\
//pdo prepare sql string to select posts from blogs table
$fetchImages = $pdo->prepare("SELECT image_location, alt FROM images");
//run sql string after prepare
$fetchImages->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="style_gallery.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main class="wrapper">
        <?php 
            while($rowImages = $fetchImages->fetch()){
                ?>
                <img src="<?= $rowImages['image_location'] ?>" alt="<?= $rowImages['alt'] ?>">
                <?php
            }
        ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>