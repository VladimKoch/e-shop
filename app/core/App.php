<?php

namespace Core;


Class App
{
    protected $controller = "Home";
    protected $method = "index";
    public $params = [];
    

    //Construck for loadin Controllers
    public function __construct()
    {  
        // Parse URL
        $url = $this->url();

        // Eshop directory
        $file = "../app/controllers/eshop/".ucfirst($url[0]).".php";
        //Admin directory
        $admin_file = "../app/controllers/admin/".ucfirst($url[0]).".php";
        
        if(file_exists($file)){
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
            require $file;
        }

        elseif(file_exists($admin_file))
        {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
            require $admin_file;
        }
        
        else
        {
            $file = "../app/controllers/eshop/_404.php";
            $this->controller = "_404";
            require $file;
        }
        
        $controller = new ('\Controller\\'.$this->controller);
        
        if(isset($url[1])){
            
            $url[1] = strtolower($url[1]);
            
            if(method_exists($controller,$url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
                $this->params = $url;
            }
            else{

                $file = "../app/controllers/eshop/_404.php";
                $this->controller = "_404";
                require $file;

            }
        }
        
        
        $controller = new ('\Controller\\'.$this->controller);
        call_user_func_array([$controller,$this->method],$this->params);

    }

    private function url()
    {
        $url = isset($_GET['url']) ? $_GET['url']:"home";
        $url = explode("/",filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
        return $url;
    } 



}


