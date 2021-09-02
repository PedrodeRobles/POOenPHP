<?php

require_once "Base.php";
require_once "Admin.php";
require_once "User.php";
require_once "Guest.php";


// abstract class Base 
// {
//     protected $name;

//     private function getClassName()
//     {
//         return get_called_class();
//     }

//     public function login()
//     {
//         return "Mi nombres es $this->name desde la clase {$this->getClassName()} ";
//     }
// }

// class Admin extends Base 
// {
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
// }

// class User extends Base 
// {
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
// }

// class Guest extends Base 
// {
//     protected $name = "invitado";
// }

$guest = new Guest();
echo $guest->login();

$user = new User("Pedro");
echo $user->login();

$admin = new Admin("Italo");
echo $admin->login();