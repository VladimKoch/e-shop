<?php
namespace Controller;

use \Core\MainController;
use \Core\Config;
use \Model\User;


Class Logout
{   
    use MainController;

    public function index()
    {
       $user = new User;
       $user ->logout();

        $this->view('eshop/home');
    }
}