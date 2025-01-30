<?php

namespace Controller;

use \Core\MainController;
use \Core\Config;
use \Model\User;

Class Panels
{   
    use MainController;

    public function index(){

        if(!isset($_SESSION['rank'])||$_SESSION['rank'] !== "admin")
        {
          header("Location: ".PATH. "home");
          die;
        }
      
      $user = new User;
      $user_data = $user -> check_login();
 
      if($user_data)
      {
        $data['user_data'] = $user_data;
      }
  
      $data['page_title'] = "Admin";

     
        $this->view('admin/panels',$data);
    }


}

