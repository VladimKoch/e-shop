<?php

namespace Core;


class Config
{

    const ASSETS = 'http://localhost/Paypal/public/assets/eshop/';
    const ROOT = '../app/';
    const ADMIN = 'http://localhost/Paypal/public/assets/admin/';

    const DB_NAME = 'eshop_db';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = 'localhost';
    const DB_TYPE = 'mysql';

    const WEBSITE_TITLE = 'MY SHOP';
    const THEME = 'eshop/'; // For change Theme of Website
    const DEBUG = true; //For Display Errors
    
}

define('ESHOP','http://localhost/Paypal/public/assets/eshop/');
define ('ROOT','../app/');
define('ADMIN','http://localhost/Paypal/public/assets/admin/');

// define ('PATH','localhost/paypal/public/');

define("WEBSITE_TITLE","MY SHOP");

define('DB_NAME','eshop_db');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');
define('DB_TYPE','mysql');

define('THEME','eshop/'); // For change Theme of Website

define('DEBUG',true); //For Display Errors
