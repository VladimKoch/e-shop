<?php

namespace Core;

use PDO;
use PDOException;


//Class for connecting to the database

Class Database
{

    // Static connect variable
    public static $con;

    //Construct function for connection with the database
    public function __construct()
    {
       try{

        $string = Config::DB_TYPE.":host=".Config::DB_HOST.";dbname=".Config::DB_NAME;
        
        self::$con = new PDO($string,Config::DB_USER,Config::DB_PASS);
        self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


       }catch(PDOException $e){
            die($e->getMessage());
       }
    }

    public static function getInstance()
    {   
        if(self::$con){
            return self::$con;
        }

        return new self();
        
    }

    public static function newInstance()
    {   
       
        return $instance = new self();
        
    }

//--------------------Read data from Database------------------------//

    public function read($query,$data = array())
    {
        $stm = self::$con -> prepare($query);
        $result = $stm->execute($data);
        if($result){
            $row = $stm -> fetchAll(PDO::FETCH_OBJ);
            if(is_array($row) && count($row)>0)
            {
                return $row;
            }
        }
        return false;

    }
    
//--------------------Write to database function------------------------//

    public function write($query,$data = array())
    {
        $stm = self::$con -> prepare($query);
        $result = $stm->execute($data);
        if($result){
           return true;
        }
        return false;
    }

//--------------------Search users by LIKE database method------------------------//

    public function search_profile($POST)
    {   
        $search_profile = $POST['search_profile'];
        $sql = "SELECT * FROM users WHERE name LIKE :search_profile";
        $stm = self::$con -> prepare($sql);
        $stm -> bindValue(':search_profile',"%$search_profile%",PDO::PARAM_STR);
        $result = $stm->execute();
        if($result){
            $row = $stm -> fetchAll(PDO::FETCH_OBJ);
            if(is_array($row) && count($row)>0)
            {
                return $row;
            }
        }
        return false;
    }

    
}






