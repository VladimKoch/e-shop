<?php

namespace Model;


use \Core\Database;
use LDAP\Result;

Class Category
{   

    function create($data){
        $db = Database::newInstance();

        $arr['category'] = ucwords($data->category);
        $arr['description'] = ucwords($data->description);

        if(!preg_match("/^[a-zA-ZáčďéěíňóřšťúůýžÁČĎÉĚÍŇÓŘŠŤÚŮÝŽ ]+$/",$arr['category']))
        {
            $_SESSION['error'] = "Please enter a valid category name";
        }

        if(!isset($_SESSION['error']) || ($_SESSION['error'] == ""))
        {
            $sql = "INSERT INTO categories (category,description) values (:category,:description)";
            $result = $db->write($sql,$arr);
            if($result){
                  return true;
            }

            return false;
        }
    }

    function edit($data){

        $arr['category'] = ucwords($data->category);
        $arr['description'] = ucwords($data->description);
        $arr['id'] = $data->id;
        
        $db=Database::newInstance();
        $query = "UPDATE categories SET category = :category, decription = :description where id = :id";
        $db->write($query,$arr);
    }

    function delete($data){
        $arr['id'] = $data->id;
        $db = Database::newInstance();
        $query = "DELETE FROM categories where id = :id";
        $db -> write($query,$arr);
    }

    public function get_all()
    {
        $db = Database::newInstance();
        $query = "SELECT * FROM categories order by id desc";
        $result = $db -> read($query);
        return $result;
    }

    function make_table($cat)
    {   
        $result = "";
        if(is_array($cat)){
            foreach($cat as $cat_row){

                $color = $cat_row->disabled ? "#5bc0de" : "#ae7c04";
                $cat_row->disabled = $cat_row->disabled ? "Enable" : "Disable";
                $args = $cat_row->id.",'".$cat_row->disabled."'";
                
                $result.= "<tr>";
                
                $result.= '<td id="id_category"><a  href="basic_table.html#">'.$cat_row->category.'</a></td>
                      <td id="id_description" class="hidden-phone">'.$cat_row->description.'</td>
                      <td>12000.00$ </td>
                      <td><span onclick="disable_row('.$args.')" class="label label-info label-mini" style="cursor:pointer;background-color:'.$color.'">'.$cat_row->disabled.'</span></td>
                      <td>
                          <button id="edit" rowid='.$cat_row->id.' onclick="show_edit({event:event,id:'.$cat_row->id.'})" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                          <button id="delete" rowid='.$cat_row->id.' onclick="delete_row({event:event,id:'.$cat_row->id.'})" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </td>';

                $result.= "</tr>";
                }
            }

       return $result;
    }

}

