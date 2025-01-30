<?php
namespace Controller;

use \Core\MainController;
use \Model\User;

Class Blog_single
{   
    use MainController;

    public function index()
    {   

        $user = new User;
        $user_data = $user -> check_login(true,['admin','customer']);
   
        if(is_object($user_data))
        {
        //   print_r($user_data);
        //   die;
          $data['user_data'] = $user_data;
        }
    

        $this->view('eshop/blog_single',$data);
    }
}