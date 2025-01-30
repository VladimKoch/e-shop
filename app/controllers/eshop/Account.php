<?php

namespace Controller;

use \Core\MainController;
use \Core\Config;
use \Model\User;

Class Account
{   
    use MainController;

    public function index(){

        if(!isset($_SESSION['url_address']))
        {
            header("Location: ".PATH."login");
            die;
        } 
        else
        {
            $user = new User;
            $result = $user->get_user($_SESSION['url_address']);
            $data['account'] = $result;
           

        }

        
      
   
      $data['page_title'] = "Account";

     
        $this->view('eshop/account',$data);
    }


}

