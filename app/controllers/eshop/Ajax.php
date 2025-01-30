<?php

namespace Controller;

use \Core\MainController;
use \Core\Database;
use \Model\Category;

Class Ajax
{   
    use MainController;

    public function index(){
      
        $data = file_get_contents('php://input');
        $data = json_decode($data);

        print_r($data);

        if(is_object($data) && isset($data->data_type)){

            $db = Database::newInstance();
            $ct = new Category;

            if($data->data_type == "edit_category"){
                    
            }
             
            elseif($data->data_type == 'add_category'){
      
                if($_SESSION['error'] !="")
                {
                    $arr['message'] = $_SESSION['error'];
                    $_SESSION['error'] = "";
                    $arr['data_type'] = "add_category";
                    $arr['message_type'] = "error";
                    
                    $result =  $ct -> get_all();
                    $arr['data'] = $ct->make_table($result);

                    echo json_encode($arr);
                    
                }else{
                    
                    $ct->create($data);

                    $arr['message'] = "Category added succesfully";
                    $arr['message_type'] = "info";
                    $arr['data_type'] = "add_category";

                    $result = $ct ->get_all();
                    $arr['data'] = $ct->make_table($result);
                    
                    echo json_encode($arr);

                }
            
            }elseif($data->data_type == 'delete_category'){

                    $ct -> delete($data);

                    $arr['message'] = "Category was succefully deleted";
                    $arr['message_type'] = "info";
                    $arr['data_type'] = "delete_category";
    
                    $result = $ct ->get_all();
                    $arr['data'] = $ct->make_table($result);

                    echo json_encode($arr);
            
            }elseif($data->data_type == 'disable_row'){

                $disabled = ($data -> current_state == 'Disable') ? 1 : 0;
                $id = $data -> id;

                $query = "update categories set disabled = '$disabled' where id = '$id' limit 1";
                $db->write($query);
               
                $arr['message'] = "";
                $_SESSION['error'] = "";
                $arr['message_type'] = "info";
                $arr['data_type'] = "disable_row";

                $result = $ct ->get_all();
                $arr['data'] = $ct->make_table($result);

                echo json_encode($arr);

            } 
        }
  
    }

}

