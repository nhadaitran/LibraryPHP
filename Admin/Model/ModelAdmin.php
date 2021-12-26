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
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            if(sizeof($result)==1){
//                foreach ($result as $value){
//                    return new Admin($value["aid"], $value["fullname"], $value["username"], $value["password"], $value["email"]);
//                }
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



