<?php
if (basename(getcwd()) == "Controller") {
    include_once "../../util/DPO.php";
    include_once "../../Entity/Book.php";
} else if (basename(__FILE__, '.php') != "index") {
    include_once "./util/DPO.php";
    include_once "./Entity/Book.php";
}

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
        $this->conn = null;
    }

    public function countBook()
    {
        try {
            $sql = "SELECT COUNT(id) as countBook FROM quanlythuvien.books";
            $result = DPO::getAllData($sql);
            return $result[0]['countBook'];
        } catch (Exception $e) {
            return null;
        }
    }

    public function getAll()
    {
        try {
            if (!empty($_SESSION['user'])) {
                $user = $_SESSION['user'];
                $id = $user['id'];
                $sql = "SELECT b.id, b.name, b.author, b.id_category, b.status, b.description, b.date, b.image, f.id as fid 
            FROM quanlythuvien.books b
            LEFT JOIN quanlythuvien.favorite f ON b.id = f.id_book
            WHERE f.id_student = '$id' OR f.id_student IS NULL ORDER BY b.id  DESC";
            } else {
                $sql = "SELECT * FROM quanlythuvien.books";
            }
            $result = DPO::getAllData($sql);
            if ($result != null) {
                return $result;
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }

    public function getLimit($start, $limit)
    {
        try {
            if (!empty($_SESSION['user'])) {
                $user = $_SESSION['user'];
                $id = $user['id'];
                $sql = "SELECT b.id, b.name, b.author, b.id_category, b.status, b.description, b.date, b.image, f.id as fid 
            FROM quanlythuvien.books b
            LEFT JOIN quanlythuvien.favorite f ON b.id = f.id_book
            WHERE f.id_student = '$id' OR f.id_student IS NULL ORDER BY b.id  DESC
            LIMIT $start , $limit";
            } else {
                $sql = "SELECT * FROM quanlythuvien.books";
            }
            $result = DPO::getAllData($sql);
            if ($result != null) {
                return $result;
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }

    public function getLimitSearch($para, $start, $limit)
    {
        try {
            if (!empty($_SESSION['user'])) {
                $user = $_SESSION['user'];
                $id = $user['id'];
                $sql = "SELECT b.id, b.name, b.author, b.id_category, b.status, b.description, b.date, b.image, f.id as fid 
            FROM quanlythuvien.books b
            LEFT JOIN quanlythuvien.favorite f ON b.id = f.id_book";
                if ($para != "") {
                    $sql .= " WHERE b.name like '%$para%' AND ( f.id_student = '$id' OR f.id_student IS NULL) ORDER BY b.id  DESC";
                } else {
                    $sql .= " WHERE f.id_student = '$id' OR f.id_student IS NULL ORDER BY b.id  DESC";
                }
                $sql .= "
            LIMIT $start , $limit";
            } else {
                $sql = "SELECT * FROM quanlythuvien.books";
            }
            $result = DPO::getAllData($sql);
            if ($result != null) {
                return $result;
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }

    public function getByID($id)
    {
        try {
            $sql = "SELECT b.id, b.name as bname, b.author, b.description, b.status, b.image, c.name as cname FROM quanlythuvien.books b "
                . " LEFT JOIN quanlythuvien.category c ON b.id_category = c.id "
                . " WHERE b.id='$id'";
            $result = DPO::getAllData($sql);
            if ($result != null) {
                return $result[0];
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }

    public function insertRequest($id_student, $name, $author)
    {
        try {
            $sql = "INSERT INTO  quanlythuvien.request (id, name, author, daterequest, id_student, id_admin)
            VALUE (?, ?, ?, ?, ?,?)";
            $param = array(null, $name, $author, date("Y-m-d"), $id_student,  null);            
            DPO::updateData($sql,$param);
            return true;
        } catch (Exception $e) {
            return null;
        }
    }
    public function searchBooks($title)
    {
        try {
            $user = $_SESSION['user'];
            $iduser = $user['id'];
            $sql = "SELECT b.id, b.name, b.author, b.id_category, b.status, b.description, b.date, b.image, f.id as fid 
            FROM quanlythuvien.books b
            LEFT JOIN quanlythuvien.favorite f ON b.id = f.id_book";
            if ($title != "") {
                $sql .= " WHERE b.name like '%$title%' AND ( f.id_student = '$iduser' OR f.id_student IS NULL) ORDER BY b.id  DESC";
            } else {
                $sql .= " WHERE f.id_student = '$iduser' OR f.id_student IS NULL ORDER BY b.id  DESC";
            }
            $result = DPO::getAllData($sql);
            if ($result != null) {
                return $result;
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }

    public function searchBooksByCategory($id)
    {
        try {
            if (!empty($_SESSION['user'])) {
                $user = $_SESSION['user'];
                $iduser = $user['id'];
                $sql = "SELECT b.id, b.name, b.author, b.id_category, b.status, b.description, b.date, b.image, f.id as fid 
            FROM quanlythuvien.books b
            LEFT JOIN quanlythuvien.favorite f ON b.id = f.id_book";
                if ($id != "0") {
                    $sql .= " WHERE (b.id_category = '$id' AND f.id_student = '$iduser') OR (b.id_category = '$id' AND f.id_student IS NULL) ORDER BY b.id  DESC";
                } else {
                    $sql .= " WHERE f.id_student = '$iduser' OR f.id_student IS NULL ORDER BY b.id  DESC";
                }
            }
            $result = DPO::getAllData($sql);
            if ($result != null) {
                return $result;
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }
}
