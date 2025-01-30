<?php

namespace Controller;

use \Core\MainController;
use \Core\Config;
use \Model\User;

Class Home
{   
    use MainController;

    public function index(){
      
      // $user = new User;
      // $user_data = $user -> check_login(true,['admin','customer']);
 
      // if(is_object($user_data))
      // {
      //   // print_r($user_data);
      //   // die;
      //   $data['user_data'] = $user_data;
      // }
  
      $data['page_title'] = "Home";

     
        $this->view('eshop/home',$data);
    }


}

