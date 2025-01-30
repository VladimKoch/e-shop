<?php

namespace Controller;

use \Core\MainController;
use \Core\Config;
use \Model\User;
use \Core\Database;
use \Model\Category;

Class Admin
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

      // echo ADMIN;
      // die;

     
        $this->view('admin/admin',$data);
    }


    public function categories(){
      if(!isset($_SESSION['rank']) ||$_SESSION['rank'] !== "admin")
      {
        header("Location: ".PATH. "home");
        die;

      }
      
      $data = [];
      $db = Database::newInstance();
      $result = $db->read("select * from categories order by id desc");
      
       
         $category = new Category; 
         $data['tables'] = $category-> make_table($result);
       



      
      


      $this->view('admin/categories',$data);
    }


}

