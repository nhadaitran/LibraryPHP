<?php
include_once "../../util/DPO.php";
class ModelIssue
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

    public function countIssue(){
        try {

            $sql = "SELECT COUNT(id) as countIssue FROM quanlythuvien.issue WHERE YEAR(dateissue)=YEAR(CURRENT_DATE) AND MONTH(dateissue)=MONTH(CURRENT_DATE) AND DATE(dateissue)=DATE(CURRENT_DATE)";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            return $result[0]['countIssue'];
        } catch (Exception $e) {
            return null;
        }
    }
    public function getAllIssue(){
        try {

            $sql = "SELECT * FROM quanlythuvien.issue";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
           var_dump($result);
        } catch (Exception $e) {
            return null;
        }
    }
}
