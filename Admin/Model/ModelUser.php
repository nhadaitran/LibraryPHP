<?php

class ModelUser
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

    public function countUser(){
        try {
            $sql = "SELECT COUNT(id) as countStudent FROM quanlythuvien.students";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            return $result[0]['countStudent'];
        } catch (Exception $e) {
            return null;
        }
    }
}