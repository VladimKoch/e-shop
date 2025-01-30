<?php
namespace Controller;

use \Core\MainController;

Class Product_details
{
    use MainController;

    public function index()
    {
        

        $this->view('eshop/product_details');
    }
}