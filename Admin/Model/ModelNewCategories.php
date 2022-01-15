<?php
include_once "../../util/DPO.php";
class ModelNewCategories
{
    private $conn;

    /**
     * @param $conn
     */
    public function __construct()
    {
        $this->conn = DPO::getSession();
    }

    public function __destruct()
    {
        DPO::closeSession();
    }

    public function getAllNewCategroies(){
        try {
            $sql = " SELECT * FROM quanlythuvien.newscategories";
            return DPO::getAllData($sql);
        } catch (Exception $e) {
            return null;
        }
    }

    public function insertNewsCategories($name){
        try{
            $sql = " INSERT INTO quanlythuvien.newscategories (name) values (:name) ";
            DPO::updateData($sql,array(":name"=>$name));
            return true;
        } catch (Exception $e){
            return null;
        }
    }

    public function deleteNewsCategories($id){
        try{
            $sql = " DELETE FROM quanlythuvien.newscategories WHERE id=:id ";
            DPO::updateData($sql,array(":id"=>$id));
            return true;
        } catch (Exception $e){
            return null;
        }
    }
}



