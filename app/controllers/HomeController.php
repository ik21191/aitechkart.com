<?php

//require_once __DIR__ . '/../Models/Post.php';

class HomeController {
    public function index() {
        // Get all posts from the model
        //$posts = Post::all();

        require_once __DIR__ . '/../views/home.php';
    }
}
