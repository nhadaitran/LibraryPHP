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
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            if (sizeof($result) == 1) {
                return $result[0];
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }

    public function checkRegister($username, $email)
    {
        try {

            $sql = "SELECT * FROM quanlythuvien.students WHERE username = '${username}' OR email = '${email}' ";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            if (sizeof($result) >= 1) {
                return false;
            }
            return true;
        } catch (Exception $e) {
            return true;
        }
    }

    public function checkEmail($email)
    {
        try {

            $sql = "SELECT * FROM quanlythuvien.students WHERE email = '${email}' ";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            if (sizeof($result) >= 1) {
                return false;
            }
            return true;
        } catch (Exception $e) {
            return true;
        }
    }

    public function insertUser($username, $name, $email, $password)
    {
        try {
            $sql = "INSERT INTO quanlythuvien.students (id, name, password, email, username)
            VALUES (?,?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([null, $name, $password, $email, $username]);
            return true;
        } catch (Exception $e) {
            return null;
            // printf($e);
        }
    }

    public function updateUser($id,$name,$email,$password)
    {
        try {
            $sql = "UPDATE quanlythuvien.students SET name='$name', password='$password', email='$email' WHERE id='$id'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return null;
        }
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
