<?php
include 'class-autoloader.inc.php';

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];

    $post = new PostsContr();
    $post->createPost($title, $body, $author);
}

// create instance of postscontr class pass in values to method that will create a post in the Data Base.
