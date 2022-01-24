<?php
//Function to trim any post data from form submits
function parsePOSTData($data){
    if(!empty($data)){
        $data = trim($data);
        return $data;
    }else{
        $data = null;
        return $data;
    }
}

//function to run if user publishes post as draft or as post
function insertPost($draft){
    //how else to do line below? - only way to access pdo from function is using this?
    global $pdo;

    //get post values from form
    $user_id = $_SESSION['user_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    //sql to run
    $insertPost = "INSERT INTO blog_posts (user_id, title, content, draft)
                   VALUES (:user_id, :title, :content, :draft)";
    $execPost = $pdo->prepare($insertPost);
    
    //bind variables for pdo statement above
    $execPost->bindValue(':user_id', $user_id);
    $execPost->bindValue(':draft', $draft);
    //parsePOSTData from functions.php
    $execPost->bindValue(':title', parsePOSTData($title));
    $execPost->bindValue(':content',  parsePOSTData($content));
    
    //run sql
    $execPost->execute();
    //relocate user on frontend
    echo '<script>window.location.replace("blogPage.php");</script>';
}

//function to run if user updates post as draft or as post
function updatePost($draft){
    //how else to do line below? - only way to access pdo from function is using this?
    global $pdo;
    
    //get post values from form
    $post_id = $_POST['postID'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    //sql to run
    $updatePost = "UPDATE blog_posts
                   SET title = :title, content = :content, draft = :draft
                   WHERE post_id = :postID";
    $execPostUpdate = $pdo->prepare($updatePost);

    //bind variables for pdo statement above
    $execPostUpdate->bindValue(':draft', $draft);
    //parsePOSTData from functions.php
    $execPostUpdate->bindValue(':postID', parsePOSTData($post_id));
    $execPostUpdate->bindValue(':title', parsePOSTData($title));
    $execPostUpdate->bindValue(':content',  parsePOSTData($content));
    
    //run sql
    $execPostUpdate->execute();
    //relocate user on frontend
    echo '<script>window.location.replace("blogPage.php");</script>';
}