<?php
session_start();
include 'sendBlogPost.php';
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
            <form method="post" action="sendBlogPost.php">
                <textarea name="title" id="title" cols="30" rows="1" placeholder="Enter title"></textarea>
                <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter blog content"></textarea>
                <button type="submit" name="submit_post">Submit</button>
            </form>
        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>