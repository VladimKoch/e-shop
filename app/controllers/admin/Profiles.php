<?php

namespace Controller;

use \Core\MainController;
use \Core\Config;
use \Model\User;
use \Core\Database;

Class Profiles
{   
    use MainController;

    public function index(){

      if(!isset($_SESSION['rank'])||$_SESSION['rank'] !== "admin")
      {
        header("Location: ".PATH. "home");
        die;
      }




      if($_SERVER['REQUEST_METHOD']==="POST")
      { 

        
        $db = Database::getInstance();
        $result = $db->search_profile($_POST);
        // print_r($result);
        $data['profiles'] = $result;

      }
      

  
      $data['page_title'] = "Profiles";

     
        $this->view('admin/profiles',$data);
    }

}