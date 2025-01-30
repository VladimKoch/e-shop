<?php
namespace Controller;

use \Core\MainController;

Class Checkout
{
    use MainController;

    public function index()
    {
        

        $this->view('eshop/checkout');
    }
}