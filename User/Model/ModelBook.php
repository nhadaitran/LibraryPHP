<?php
include_once "../../util/DPO.php";
include_once "../../Entity/Book.php";
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
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result[0]['countBook'];
        } catch (Exception $e) {
            return null;
        }
    }

    public function getAll()
    {
        $bookArray = array();
        try {
            $sql = "SELECT * FROM quanlythuvien.books";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            foreach ($result as $value) {
                $book = new Book($value["id"], $value["aid"], $value["name"], $value["author"], $value["status"], $value["description"],$value["date"], $value["image"]);
                array_push($bookArray, $book);
            }
        } catch (Exception $e) {
            return null;
        }
        return $bookArray;
    }
}
