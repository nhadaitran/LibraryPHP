<?php
include_once "../../util/DPO.php";
class ModelNews
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

    public function getAllNews(){
        try {
            $sql = " SELECT n.id, n.title, n.datenews, n.description, nc.name, a.fullname FROM quanlythuvien.news n"
                    ." JOIN quanlythuvien.newscategories nc ON n.id_newscategory = nc.id"
                    ." JOIN quanlythuvien.admin a ON n.id_admin = a.id ";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }
}


