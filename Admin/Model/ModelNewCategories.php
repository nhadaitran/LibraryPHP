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
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }

    public function insertNewsCategories($name){
        try{
            $sql = " INSERT INTO quanlythuvien.newscategories (name) values (:name) ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->execute();
            return true;
        } catch (Exception $e){
            return null;
        }
    }

    public function deleteNewsCategories($id){
        try{
            $sql = " DELETE FROM quanlythuvien.newscategories WHERE id=:id ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            return true;
        } catch (Exception $e){
            return null;
        }
    }
}



