<?php
if (basename(getcwd()) == "Controller") {
    include_once "../../util/DPO.php";
} else if (basename(__FILE__, '.php') != "index") {
    include_once "./util/DPO.php";
}

class ModelFavorite
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
            $sql = "SELECT f.id, f.id_book, b.name, b.author, b.status, b.image FROM quanlythuvien.favorite f
            LEFT JOIN quanlythuvien.books b ON f.id_book = b.id
            WHERE f.id_student='$id_student'";
            $result = DPO::getAllData($sql);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }

    public function insert($id_student, $id_book)
    {
        try {
            $sql = "INSERT INTO  quanlythuvien.favorite (id, id_student, id_book)
            VALUE (?,?,?)";
            $param = array(null, $id_student, $id_book);
            DPO::updateData($sql,$param);
            return true;
        } catch (Exception $e) {
            return null;
        }
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM  quanlythuvien.favorite WHERE id=?";
            $param = array($id);
            DPO::updateData($sql,$param);
            return true;
        } catch (Exception $e) {
            return null;
        }
    }

    public function getBySidAndBid($id_student, $id_book)
    {
        try {
            $sql = "SELECT * FROM quanlythuvien.favorite WHERE id_student='$id_student' AND id_book='$id_book'";
            $result = DPO::getAllData($sql);    
            if ($result != null) {
                return $result[0];
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }
}
