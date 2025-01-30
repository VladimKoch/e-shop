<?php

namespace Model;


use \Core\Database;


Class User
{   
    //Error varibable
    public $error = "";


// ---------------------Signup function-----------------//

       public function signup($POST)
        {   
            //Make connection with database
            $data = array();
            $db = Database::getInstance();

            //Assign data post to the data array
            $data['name'] = trim($POST['name']);
            $data['email'] = trim($POST['email']);
            $data['password'] = trim($POST['password']);
            $password2 = trim($POST['password2']);

            //chceck if data name is not empty and if it is valide string name also with czech's symbols
            if(empty($data['name']) || !preg_match( '/^[A-ZÁČĎÉĚÍŇÓŘŠŤÚŮÝŽa-záčďéěíňóřšťúůýž]+([ \'\\-][A-ZÁČĎÉĚÍŇÓŘŠŤÚŮÝŽa-záčďéěíňóřšťúůýž]+)*$/u',$data['name']))
            {
                $this->error .="Please enter a valid name <br>";
            }
            //Check if data email is not empty and if it is valid string email 
            if(empty($data['email']) || !preg_match("/^[a-zA-Z-]+@[a-zA-Z]+.[a-zA-Z]+$/",$data['email']))
            {
                $this->error .="Please enter a valid email <br>";
            }
            //If is the password the same as the password2
            if($data['password'] !== $password2)
            {
                $this->error .= "Password do not match <br>";
            }

            //How many minimum characters are allowed  
            if(strlen($data['password']) < 4)
            {
                $this->error .= "Password must be atleast 4 characters long <br>";
            }

            //Check if email already exists
            $sql = "select * from users where email = :email limit 1";
            $arr['email'] = $data['email'];
            $check = $db->read($sql,$arr);
            if(is_array($check)){

                $this->error .= "That email is already in use <br>";
            }

            //Check if url_address is not duplicated
            $data['url_address'] = $this->get_random_string_max(60);
            $arr = false;
            $sql = "select * from users where url_address = :url_address limit 1";
            $arr['url_address'] = $data['url_address'];
            $check = $db->read($sql,$arr);
            if($check){
                $data['url_address'] = $this->get_random_string_max(60); 
            }

            // When everything pass, all data inputs are going to be write in to the Database
            if($this->error == "")
            {
                //Save datas
                $data['rank'] = "customer";
                $data['date'] = date("Y-m-d H:i");
                $data['password'] = hash('sha1',$data['password']); 

                $query = "insert into users (url_address,name,email,password,rank,date) values (:url_address,:name,:email,:password,:rank,:date)";
                $result = $db->write($query,$data);
                if($result){
                    header("Location: ". PATH . "login");
                    die;
                }
            }
            //Global Session errors
            $_SESSION['error'] = $this->error;
        }

// ---------------------Login function-----------------//

        public function login($POST)
        {   
            //Make connection with database
            $data= array();
            $db = Database::getInstance();

            //Check if the post inputs are not empty
            if(!empty($POST['email']&&!empty($POST['password'])))
            {   
                //Assign data post to the data array
                $data['email'] = trim($POST['email']);
                $data['password'] = trim($POST['password']);

                //Hash password
                $data['password'] = hash('sha1',$data['password']);

                //A data select query from database
                $sql = "select * from users where email = :email and password = :password limit 1";
                $result = $db->read($sql,$data);
                // show($result);
                // die;
                if($result){

                    //Check if the result match with inserted datas
                    if($result[0]->email === $data['email'] && $result[0]->password === $data['password'])
                    {   
                        //set the Session and data;
                        session_start();
                        $_SESSION['time'] = time() + 1000;
                        $_SESSION['name'] = $result[0]->name;
                        $_SESSION['email'] = $result[0]->email;
                        $_SESSION['url_address'] = $result[0]->url_address;
                        $_SESSION['rank'] = $result[0]->rank;
                    
                        //redirect to Home
                        header("Location: ".PATH."home");
                        exit;
                    }else
                    {
                        $this->error.="Invalid email or password";
                        
                    }
                }
                //If the inserted inputs datas do not match with database user data
                else{
                    $this->error .= "Invalid email or password";
                    
                }

            //If the inputs data are empty
            }else{
                $this->error .= "Enter email and password";
            }

            //Insert error message in to the Global Session
            $_SESSION['error'] = $this->error;
        }
        public function get_user($url)
        {   
            $data['url_address'] = $url;
            $db = Database::getInstance();
            $sql = "SELECT * FROM users where url_address = :url_address limit 1";
            $result = $db->read($sql,$data);
            if($result)
            {
                return $result;
            }

            return false;
        }

// ---------------------Random string function for creating url_address-----------------//

        private function get_random_string_max($length)
        {   
            //Array symbols
            $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','X','Y','Z');
            
            //Result text url
            $text ="";

            //Chosing random length from the inserted length
            $length = rand(20,$length);

            //Loop for creating text from length
            for ($i=0;$i<$length;$i++)
            {   
                //Creating random number for searching symbol in arrray
                $random = rand(0,60);

                //Adding symbol to the text
                $text .= $array[$random];
            }

            //Result url_address
            return $text;
        }

// ---------------------Function check if user is logged in -----------------//

        public function check_login($redirect=false,$allowed=array())
        {
            $db = Database::getInstance();
            if(count($allowed)>0)
            {
                $arr['url_address'] = $_SESSION['url_address'];
                $query = "SELECT * FROM users WHERE url_address = :url_address limit 1 ";
                $result = $db->read($query,$arr);
    
                if(is_array($result))
                {   
                    $result = $result[0];
                    if(in_array($result->rank,$allowed))
                    {
                        return $result;
                    }
                } else{
                    header("Location: " . PATH."login");
                    die;
                }

            }else
            {

                //Check if isset Session url_address
                if(isset($_SESSION['url_address']))
                {  
                   
                    $arr = false;
    
                    //asign Session to an array
                    $arr['url_address'] = $_SESSION['url_address'];
    
                    //Read from database
                    $query = "select * from users where url_address = :url_address limit 1";
                    $result = $db->read($query,$arr);
    
                    //Check if is any result
                    if(is_array($result)){
                        return $result[0];
                    }
                }
                if($redirect){
                    header("Loacation: " . PATH . "login");
                    die;
                }
            }

            return false;
        }
// ---------------------Function logout -------------------//

       public function logout(){

            //Check if Session is set
            if(isset($_SESSION['url_address']))
            {   
                //unset Session

                unset($_SESSION['time']);
                unset($_SESSION['name']);
                unset($_SESSION['email']); 
                unset($_SESSION['rank']);
                unset($_SESSION['url_address']);
            }

            //Redirect to home
            header("Location: ".PATH."home");
            exit;
        }



}