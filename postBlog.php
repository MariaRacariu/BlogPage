<?php
session_start();
include 'sendBlogPost.php';

//use session variable set in sendBlogPost.php, set to $postID for use later in this page
$postID = $_SESSION["postID"];
//now unset the session variable so if the user leaves this page without submitting changes it can be redefined later
unset($_SESSION["postID"]);

if(isset($postID)){
    $fetchEditPost = $pdo->prepare("SELECT title, content, draft FROM blog_posts WHERE post_id = :postID");
    $fetchEditPost->bindValue(':postID', $postID);
    $fetchEditPost->execute();
    //since this will only fetch one row we can use result without a while loop below
    $result = $fetchEditPost->fetch(PDO::FETCH_ASSOC);
}
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
                <textarea name="title" id="title" cols="30" rows="1" placeholder="Enter title"><?= $result["title"] ?></textarea>
                <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter blog content"><?= $result["content"] ?></textarea>
                <?php
                if(isset($postID)){
                    echo '<input type="hidden" name="postID" value="'. $postID .'">';
                    echo '<button class="btn btn-primary" type="submit" name="submit_edit">Publish changes</button>';
                    if($result['draft'] === '1'){
                        echo '<button class="btn btn-primary" type="submit" name="update_draft">Save Changes as Draft</button>';
                    }
                }else{
                    echo '<button class="btn btn-primary" type="submit" name="submit_post">Publish</button>';
                    echo '<button class="btn btn-primary" type="submit" name="insert_draft">Save as Draft</button>';
                }
                ?>
            </form>
        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>