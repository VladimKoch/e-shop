<?php
namespace Controller;

use \Core\MainController;
use \Core\Config;
use \Model\User;


Class Login
{   
    use MainController;

    public function index()
    {
        $data['page_title'] = "Login ";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // show($_POST);

            // $user = new User;
            $user = new User;
            $user->login($_POST);
       
        }

        $this->view('eshop/login',$data);
    }
}