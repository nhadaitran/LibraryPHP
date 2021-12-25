<?php

class ModelReturn
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

    public function countReturn(){
        try {
            $sql = "SELECT COUNT(id) as countReturn FROM quanlythuvien.returns WHERE YEAR(datereturn)=YEAR(CURRENT_DATE) AND MONTH(datereturn)=MONTH(CURRENT_DATE) AND DATE(datereturn)=DATE(CURRENT_DATE)";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            return $result[0]['countReturn'];
        } catch (Exception $e) {
            return null;
        }
    }
}