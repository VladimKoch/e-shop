<?php

spl_autoload_register(function($classname){

        $classname = explode("\\",$classname);
        // show($classname);
        if($classname[0] === 'Controller')
        {   
            $filename = "../app/controllers/".ucfirst($classname[1]).".php";
            if(file_exists($filename))
            {
                require_once $filename;
            }
        }
    
        if($classname[0] === 'Model')
        {
            $filename = "../app/models/".ucfirst($classname[1]).".php";
            if(file_exists($filename))
            {
                require_once $filename;
            }
        }
    
    });
    
require "../app/core/config.php";
require "../app/core/Database.php";
require "../app/core/MainController.php";
require "../app/core/App.php";
require "../app/core/functions.php";