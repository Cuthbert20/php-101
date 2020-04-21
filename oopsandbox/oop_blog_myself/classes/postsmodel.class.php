<?php
declare(strict_types = 1);
class PostsModel extends Dbh{

    public function setPost(string $title, string $body, string $author){
        $sql = 'INSERT INTO posts (title, body, author) VALUES (:title, :body, :author)';
        $stmt = $this->connect()->prepare($sql);
        try{
        $stmt->execute(['title'=>$title, 'body'=>$body, 'author'=>$author]);
        }catch(TypeError $e){
            echo "Error: " . $e;
        }
    }
}