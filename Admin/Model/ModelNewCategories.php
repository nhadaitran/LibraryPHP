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
}



