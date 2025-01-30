<?php

namespace Core;


trait MainController
{
    public function view($name, array $data=[]){

        if(!empty($data)){
            extract($data);
        }
        
        $file = "../app/views/".$name.".view.php";
        
        if(file_exists($file)){
            include  $file;
        }

        else
        {
            $file = "../app/views/eshop/404.view.php";
            include $file;
        }
    }
    public function load_model($model){

    
        $file = "../app/models/".ucfirst($model).".php";
        
        if(file_exists($file)){

            require_once  $file;
            return $a = new $model();
        }
        else
        {
           return false;
        }
    }
}

