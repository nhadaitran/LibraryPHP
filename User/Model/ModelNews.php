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

    public function getAllNewsCa(){
        try {
            $sql = "SELECT newsca.id, newsca.name, count(news.id) as qty FROM quanlythuvien.newscategories newsca JOIN quanlythuvien.news on news.id_newscategory = newsca.id GROUP BY newsca.name, newsca.id";
            $result = DPO::getAllData($sql);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }

    public function getNews($id){
        try {
            $sql = " SELECT ne.id, ne.image, ne.title, ne.description, ne.datenews, newca.name AS nameCategory, ad.fullName AS nameAdmin FROM quanlythuvien.news ne 
                JOIN quanlythuvien.newscategories newca ON ne.id_newscategory = newca.id 
                JOIN quanlythuvien.admin ad ON ad.id = ne.id_admin
                WHERE ne.id ='$id'";
            $result = DPO::getAllData($sql);
            if ($result != null) {
                return $result[0];
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }

}