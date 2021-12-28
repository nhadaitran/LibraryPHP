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
        $this->conn=null;
    }

    public function getAllCategory(){
        try {

            $sql = " SELECT ca.id, ca.name, COUNT(b.id_category) AS countBook FROM quanlythuvien.category ca "
                    ." LEFT JOIN quanlythuvien.books b ON b.id_category = ca.id"
                    ." GROUP BY ca.id ";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }
    public function searchCategory($search){
        try {

            $sql = " SELECT ca.id, ca.name, COUNT(b.id_category) AS countBook FROM quanlythuvien.category ca "
                ." LEFT JOIN quanlythuvien.books b ON b.id_category = ca.id"
                ." WHERE ca.id = '$search' OR ca.name LIKE '%$search%' "
                ." GROUP BY ca.id ";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }
}
