<?php

namespace App;

class Author extends User {

    protected $created_posts;
    protected $posts = [];

    public function createPost(Post $post) {
        $this->posts[] = $post;
    }

    public function getPostst() : array {
        return $this->posts;
    }

}