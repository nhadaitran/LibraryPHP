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
            $sql = " SELECT ne.id, ne.image, ne.title, ne.description, ne.datenews, newca.name AS nameCategory, ad.fullName AS nameAdmin FROM quanlythuvien.news ne "
                ." JOIN quanlythuvien.newscategories newca ON ne.id_newscategory = newca.id "
                ." JOIN quanlythuvien.admin ad ON ad.id = ne.id_admin"
                ." ORDER BY ne.id DESC "
                ." LIMIT 5";
            $result = DPO::getAllData($sql);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }

    public function getNews($id){
        try {
            $sql = " SELECT ne.id, ne.image, ne.title, ne.description, ne.datenews, newca.name AS nameCategory, ad.fullName AS nameAdmin FROM news ne "
                ." JOIN newscategories newca ON ne.id_newscategory = newca.id "
                ." JOIN admin ad ON ad.id = ne.id_admin"
                ." WHERE ne.id =:id";
            $param = array(":id"=>$id);
            $result = DPO::getData($sql,$param);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }
}