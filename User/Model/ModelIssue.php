<?php
if (basename(getcwd()) == "Controller") {
    include_once "../../util/DPO.php";
} else if (basename(__FILE__, '.php') != "index") {
    include_once "./util/DPO.php";
}

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
        $this->conn = null;
    }

    public function getAll($id_student)
    {
        try {
            $sql = "SELECT * FROM quanlythuvien.issue WHERE id_student='$id_student' AND status='0'";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }
    public function getByID($id_student, $id_book)
    {
        try {
            $sql = "SELECT * FROM quanlythuvien.issue WHERE id_student='$id_student' AND id_book='$id_book' AND status='0'";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            if ($result != null) {
                return $result[0];
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }
    public function insert($id_student, $id_book)
    {
        try {
            $sql = "INSERT INTO  quanlythuvien.issue (id, dateissue, id_student, id_book, id_admin, status)
            VALUE (?, ?, ?, ?, ?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([null, date("Y-m-d"), $id_student, $id_book, null, 0]);
            return true;
        } catch (Exception $e) {
            return null;
        }
    }
}
