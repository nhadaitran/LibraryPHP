<?php
if (basename(getcwd()) == "Controller") {
    include_once "../../util/DPO.php";
} else if (basename(__FILE__, '.php') != "index") {
    include_once "./util/DPO.php";
}

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

    public function getAll($id_student)
    {
        try {
            $sql = "SELECT r.id, r.datereturn, r.id_issue, i.dateissue, i.id_student, i.id_book, b.name, b.author FROM quanlythuvien.returns r
            LEFT JOIN quanlythuvien.issue i ON r.id_issue = i.id
            LEFT JOIN quanlythuvien.books b ON i.id_book = b.id
            WHERE i.id_student='$id_student'";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            if ($result != null) {
                return $result;
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }
}