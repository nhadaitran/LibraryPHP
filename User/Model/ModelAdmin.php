<?php
    include_once "../../util/DPO.php";
    include_once "../../Entity/Admin.php";


class ModelAdmin
{
    private $conn;

    /**
     * @param $conn
     */
    public function __construct()
    {
        $this->conn = DPO::getSession();
    }

    public function checkLogin($username, $password)
    {
        try {

            $sql = "SELECT * FROM quanlythuvien.admin WHERE username = '${username}' AND password = '${password}' ";
            $result = DPO::getAllData($sql);
            if(sizeof($result)==1){
                return $result[0];
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }

    public function __destruct()
    {
       $this->conn=null;
    }

}



