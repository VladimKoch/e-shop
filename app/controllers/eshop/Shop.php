<?php
namespace Controller;

use \Core\MainController;

Class Shop
{
    use MainController;

    public function index()
    {
        

        $this->view('eshop/shop');
    }
}