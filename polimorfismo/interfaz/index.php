<?php

require_once "SearchInterface.php";
require_once "Post.php";
require_once "User.php";

$user = new User();
echo $user->all();

$post = new Post();
echo $post->all();
