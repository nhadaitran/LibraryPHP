<?php
include_once "../../util/DPO.php";
class ModelBook
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
    public function countBook(){
        try {

            $sql = "SELECT COUNT(id) as countBook FROM quanlythuvien.books";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            return $result[0]['countBook'];
        } catch (Exception $e) {
            return null;
        }
    }
}
