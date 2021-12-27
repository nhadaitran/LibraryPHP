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

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM quanlythuvien.books";
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

    public function getByID($id)
    {
        try {
            $sql = "SELECT b.id, b.name as bname, b.author, b.description, b.status, b.image, c.name as cname FROM quanlythuvien.books b "
                . " LEFT JOIN quanlythuvien.category c ON b.id_category = c.id "
                . " WHERE b.id='$id'";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result[0];
        } catch (Exception $e) {
            return null;
        }
    }


    public function searchBooks($title)
    {
        $bookArray = array();
        try {
            $sql = "SELECT * FROM quanlythuvien.books";
            if ($title != "") {
                $sql .= " WHERE name like '%$title%'";
            }
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $value) {
                $book = new Book($value["id"],  $value["name"], $value["author"], $value["id_category"], $value["status"], $value["description"], $value["date"], $value["image"]);
                array_push($bookArray, $book);
            }
        } catch (Exception $e) {
            return null;
        }
        return $bookArray;
    }

    public function searchBooksByCategory($id)
    {
        $bookArray = array();
        try {
            $sql = "SELECT * FROM quanlythuvien.books";
            if ($id != "0") {
                $sql .= " WHERE id_category = " . $id;
            }
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($result != null) {
                return $result;
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
        return $bookArray;
    }
}
