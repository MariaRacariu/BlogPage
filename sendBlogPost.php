<?php
include 'databaseConnection.php';
include 'functions.php';
session_start();

//submit post using function in functions.php when 'submit_post' button is clicked
if(isset($_POST['submit_post'])){
    insertPost(0);
}

//submit draft post using function in functions.php  when 'insert_draft' button is clicked
if(isset($_POST['insert_draft'])){
    insertPost(1);
}



//Delete posts from database
if(isset($_POST['delete_post'])){
    
    $post_id = $_POST['postID'];
    
    $deletePost = "DELETE FROM blog_posts WHERE post_id = :postID";
    $execDelete = $pdo->prepare($deletePost);
    
    //from functions.php
    $execDelete->bindValue(':postID', parsePOSTData($post_id));
    
    $execDelete->execute();

    echo '<script>window.location.replace("blogPage.php");</script>';
}


//when user presses edit post button
if(isset($_POST['edit_post'])){
    //set session variable from postID hidden input in form to allow postBlog to know which post should be edited
    $_SESSION["postID"] = $_POST['postID'];
    //relocate user on frontend
    echo '<script>window.location.replace("postBlog.php");</script>';
}


//update post using function in functions.php when 'submit_edit' button is clicked
if(isset($_POST['submit_edit'])){
    updatePost(0);
}

//update draft post using function in functions.php when 'update_draft' button is clicked
if(isset($_POST['update_draft'])){
    updatePost(1);
}
?>