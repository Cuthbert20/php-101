<?php

class PostsContr extends PostsModel{
    public function createPost($title, $body, $author){
        $this->setPost($title, $body, $author);
    }
}
