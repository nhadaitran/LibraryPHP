<?php
if(basename(getcwd()) =="Controller"){
    include_once "../../util/DPO.php";
    include_once "../../Entity/Category.php";
}
else if(basename(__FILE__,'.php') !="index"){
    include_once "./util/DPO.php";
    include_once "./Entity/Category.php";
}
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
            $result = DPO::getAllData($sql);
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
