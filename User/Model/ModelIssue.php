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
            $sql = "SELECT i.id, i.dateissue, i.id_book, i.id_student, b.name, b.author FROM quanlythuvien.issue i
            LEFT JOIN quanlythuvien.books b ON i.id_book = b.id
            WHERE i.id_student='$id_student' AND i.status='0' AND i.id_admin IS NOT NULL";
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
            VALUE (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([null, date("Y-m-d"), $id_student, $id_book, null, 0]);
            return true;
        } catch (Exception $e) {
            return null;
        }
    }

    public function updateBookIssue($id_book)
    {
        try {
            $sql = "UPDATE quanlythuvien.books SET status=1 WHERE id='$id_book'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return null;
        }
    }
    
}
