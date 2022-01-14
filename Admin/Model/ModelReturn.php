<?php
include_once "../../util/DPO.php";
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
        DPO::closeSession();
    }

    public function countReturn(){
        try {
            $sql = "SELECT COALESCE (COUNT(id),0) as countReturn FROM quanlythuvien.returns WHERE YEAR(datereturn)=YEAR(CURRENT_DATE) AND MONTH(datereturn)=MONTH(CURRENT_DATE) AND DATE(datereturn)=DATE(CURRENT_DATE)";
            $result = DPO::getAllData($sql);
            return $result[0]['countReturn'];
        } catch (Exception $e) {
            return null;
        }
    }

    public function getAllReturn(){
        try {
            $sql =" SELECT re.id, a.fullname AS nameAdmin, st.name AS nameStudent, b.name AS nameBook, re.datereturn FROM quanlythuvien.returns re "
                    ." JOIN quanlythuvien.issue isu ON  re.id_issue = isu.id "
                    ." JOIN quanlythuvien.admin a ON re.id_admin = a.id "
                    ." JOIN quanlythuvien.books b ON isu.id_book = b.id "
                    ." JOIN quanlythuvien.students st ON st.id = isu.id_student "
                    ." WHERE isu.status = 1 AND b.status = 0";
            $result = DPO::getAllData($sql);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }
    public function searchReturn($search){
        try {
            $sql =" SELECT re.id, ad.fullname as nameAdmin, bo.name as nameBook, st.name as nameStudent ,re.datereturn FROM quanlythuvien.returns re "
                    ." JOIN quanlythuvien.issue iss ON re.id_issue = iss.id "
                    ." JOIN quanlythuvien.admin ad ON iss.id_admin = ad.id "
                    ." JOIN quanlythuvien.books bo ON iss.id_book = bo.id "
                    ." JOIN quanlythuvien.students st ON iss.id_student = st.id"
                    ." WHERE ( iss.status = 1 AND bo.status = 0 ) AND ( re.id =:search OR  ad.fullname LIKE '%$search%' OR  bo.name LIKE '%$search%' OR  st.name LIKE '%$search%' ) ";
            $param = array(":search"=>$search);
            $result = DPO::getData($sql,$param);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }

    public function insertReturn($id_issue, $id_admin)
    {
        try {
            $sql = "INSERT INTO  quanlythuvien.returns (id, datereturn, id_issue, id_admin)
            VALUE (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([null, date("Y-m-d"), $id_issue, $id_admin]);
            return true;
        } catch (Exception $e) {
            return null;
        }
    }
}
