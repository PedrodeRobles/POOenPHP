<?php

require_once "SearchInterface.php";

class Post implements Search
{
    public function all()
    {
        return "Obteniendo a los post.   ";
        
    }
}