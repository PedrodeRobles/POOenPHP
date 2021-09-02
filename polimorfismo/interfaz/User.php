<?php

require_once "SearchInterface.php";

class User implements Search
{
    public function all()
    {
        return "Obteniendo a los usuarios.   ";
    }
}