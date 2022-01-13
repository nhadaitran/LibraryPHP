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

    public function countUser(){
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

    public function findByIdNameMember($id)
    {
        try {
            $sql = " SELECT s.id, s.username, s.password, s.email, s.name, s.lock FROM quanlythuvien.students s"
                . " WHERE s.username LIKE '%$id%' OR s.id ='$id' or s.name LIKE '%$id%'";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }
    public function selectLockMember($id)
    {
        try {

            $sql = " SELECT s.lock FROM quanlythuvien.students s"
                . " WHERE s.id ='$id' and s.lock ='1'";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
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
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function updateUnLockMember($id)
    {
        try {
            $sql = " UPDATE quanlythuvien.students s set s.lock=0 "
                . " WHERE s.id ='$id'";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}