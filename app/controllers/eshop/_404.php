<?php
namespace Controller;

use \Core\MainController;


Class _404
{   
    use MainController;

    public function index()
    {
    

        $this->view('eshop/404');
    }
}