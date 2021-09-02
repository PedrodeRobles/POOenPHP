<?php

class User 
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Admin extends User
{
    public function getName()
    {
        return "Soy $this->name el Admin";
    }
}

$admin = new Admin("Pedro");
echo $admin->getName();