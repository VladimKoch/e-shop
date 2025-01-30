<?php
namespace Controller;

use \Core\MainController;
use \Model\User;


Class Signup
{   
    use MainController;
    // use User;

    public function index()
    {   


        $data['page_title'] = "Login ";

        if($_SERVER['REQUEST_METHOD']==='POST'){
            // show($_POST);

            // $user = new User;
            $user = new User;
            $user->signup($_POST);
         

        }


        $this->view('eshop/signup',$data);
    }
}