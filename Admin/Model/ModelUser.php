<?php
include_once "../../util/DPO.php";
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

    public function __destruct()
    {
        DPO::closeSession();
    }

    public function countUser()
    {
        try {
            $sql = "SELECT COUNT(id) as countStudent FROM quanlythuvien.students";
            $result = DPO::getAllData($sql);
            return $result[0]['countStudent'];
        } catch (Exception $e) {
            return null;
        }
    }

    public function getAllMember()
    {
        try {
            $sql = " SELECT s.id, s.username, s.password, s.email, s.name, s.lock FROM quanlythuvien.students s ";
            $result = DPO::getAllData($sql);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }

    public function findByIdNameMember($search)
    {
        try {

            if (!empty($search)) {
                $sql = " SELECT s.id, s.username, s.password, s.email, s.name, s.lock FROM quanlythuvien.students s"
                    . " WHERE s.username LIKE '%$search%' OR s.id =:search or s.name LIKE '%$search%'";
                $param = array(":search" => $search);
                $result = DPO::getData($sql, $param);
                return $result;
            } else {
                return $this->getAllMember();
            }
        } catch (Exception $e) {
            return null;
        }
    }
    
    
    public function selectLockMember($id)
    {
        try {

            $sql = " SELECT s.lock FROM quanlythuvien.students s"
                . " WHERE s.id ='$id' and s.lock ='1'";
                $result = DPO::getAllData($sql);
                return $result;
        } catch (Exception $e) {
            return null;
        }
    }

    public function updateLockMember($id)
    {
        try {
            $sql = " UPDATE quanlythuvien.students s set s.lock=1 "
                . " WHERE s.id ='$id'";
            $stmt = $this->conn->query($sql);
            $stmt->execute([$id]);
        } catch (Exception $e) {
            return false;
        }
    }

    public function updateUnLockMember($id)
    {
        try {
            $sql = " UPDATE quanlythuvien.students s set s.lock=0 "
                . " WHERE s.id ='$id'";
            $stmt = $this->conn->query($sql);
            $stmt->execute([$id]);
        } catch (Exception $e) {
            return false;
        }
    }
}
