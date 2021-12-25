<?php
    include_once "../../util/DPO.php";
    include_once "../../Entity/Students.php";


class ModelUser
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

            $sql = "SELECT * FROM quanlythuvien.students WHERE username = '${username}' AND password = '${password}' ";
            $stmt = $this->conn->query($sql,PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            if(sizeof($result)==1){
                foreach ($result as $value){
                    return new Students($value["id"], $value["name"], $value["username"], $value["password"], $value["email"]);
                }
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



