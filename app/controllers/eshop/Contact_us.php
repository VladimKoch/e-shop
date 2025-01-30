<?php
namespace Controller;

use \Core\MainController;

Class Contact_us
{

    use MainController;

    public function index()
    {
       

        $this->view('eshop/contact_us');
    }
}