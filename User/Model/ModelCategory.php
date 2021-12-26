<?php
include_once "../../util/DPO.php";
include_once "../../Entity/Category.php";
class ModelCategory
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
        $catArray = array();
        try {
            $sql = "SELECT * FROM quanlythuvien.category";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            foreach ($result as $value) {
                $cat = new Category ($value["id"], $value["name"]);
                array_push($catArray, $cat);
            }
        } catch (Exception $e) {
            return null;
        }
        return $catArray;
    }

}
