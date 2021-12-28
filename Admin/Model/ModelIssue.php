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

            $sql = "SELECT COALESCE (COUNT(id),0) as countIssue FROM quanlythuvien.issue "
                    ."WHERE YEAR(dateissue) = YEAR(CURRENT_DATE)"
                    ."AND MONTH(dateissue) = MONTH(CURRENT_DATE)"
                    ."AND DATE(dateissue) = DATE(CURRENT_DATE)";

            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            return $result[0]['countIssue'];
        } catch (Exception $e) {
            return 0;
        }
    }
    public function getAllIssue(){
        try {
            $sql = " SELECT i.id, i.dateissue, st.name as nameStudent, a.fullname as nameAdmin, bo.name as nameBook FROM quanlythuvien.issue i "
                    ." LEFT JOIN quanlythuvien.admin a ON i.id_admin = a.id "
                    ." LEFT JOIN quanlythuvien.students st ON i.id_student = st.id "
                    ." LEFT JOIN quanlythuvien.books bo ON i.id_book = bo.id "
                    ." WHERE i.status = 0";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }

    public function searchIssue($search){
        try{
            $sql = " SELECT i.id, i.dateissue, st.name as nameStudent, a.fullname as nameAdmin, bo.name as nameBook FROM quanlythuvien.issue i "
                ." LEFT JOIN quanlythuvien.admin a ON i.id_admin = a.id "
                ." LEFT JOIN quanlythuvien.students st ON i.id_student = st.id "
                ." LEFT JOIN quanlythuvien.books bo ON i.id_book = bo.id "
                ." WHERE i.status = 0 AND (i.id = '$search' OR bo.id = '$search' OR i.id_student = '$search' OR a.fullname LIKE '%$search%' OR bo.name LIKE '%$search%' OR st.name LIKE '%$search%' ) ";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }catch (Exception $e){
            return null;
        }

    }
}

//$modelIssue = new ModelIssue();
//var_dump($modelIssue->searchIssue('abc'));
