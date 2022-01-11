<?php
include_once "../../util/DPO.php";
class ModelCategory
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

    public function getAllCategory(){
        try {

            $sql = " SELECT ca.id, ca.name, COUNT(b.id_category) AS countBook FROM quanlythuvien.category ca "
                    ." LEFT JOIN quanlythuvien.books b ON b.id_category = ca.id"
                    ." GROUP BY ca.id ";
            $result = DPO::getAllData($sql);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }
    public function saveCategory($nameCategory){
        try {
            $sql = " INSERT INTO quanlythuvien.category(name)"
                . "VALUES('$nameCategory')";
            $this->conn->exec($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }
    public function searchCategory($search){
        try {

            $sql = " SELECT ca.id, ca.name, COUNT(b.id_category) AS countBook FROM quanlythuvien.category ca "
                ." LEFT JOIN quanlythuvien.books b ON b.id_category = ca.id"
                ." WHERE ca.id =:search OR ca.name LIKE '%$search%' "
                ." GROUP BY ca.id ";
            $param = array(":search"=>$search);
            $result = DPO::getData($sql,$param);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }
}
