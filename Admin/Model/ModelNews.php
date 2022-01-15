<?php
include_once "../../util/DPO.php";
include_once "../../Entity/News.php";
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

            $result = DPO::getAllData($sql);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }

    public function findNewsById($id){
        try {
            $sql = "SELECT n.id, n.image, n.id_newscategory, n.title, n.description, n.datenews, n.id_admin, a.fullname as nameAdmin FROM quanlythuvien.news as n join quanlythuvien.admin as a on n.id_admin = a.id WHERE n.id = :id ";
            $param = array(":id"=>$id);
            $result= DPO::getData($sql,$param);
            if(sizeof($result)==1){
                return $result[0];
            }
            return null;
        } catch (Exception $e) {
            return null;
        }
    }

    public function insertNews($news){
        try{
            $sql = "INSERT INTO quanlythuvien.news (image, id_newscategory, title, description, datenews, id_admin) VALUES(?,?,?,?,?,?)";
            
            $param = array($news->getImage(), $news->getIdNewcategory(), $news->getTitle(), $news->getDescription(), $news->getDateNew(), $news->getIdAdmin());

            DPO::updateData($sql,$param);

        } catch (Exception $e){
            return null;
        }
    }

    public function deleteNews($id){
        try{
            $sql = "DELETE FROM quanlythuvien.news WHERE id = :id";
            $param = array(":id"=>$id);
            $result = DPO::updateData($sql,$param);
            return $result;
        }
        catch(Exception $e){
            return null;
        }
    }

    public function updateNews($news){
        try{
            $sql = "UPDATE quanlythuvien.news SET image=:image,id_newscategory=:id_newscategory,title=:title, description=:description, datenews=:datenews, id_admin=:id_admin WHERE id =:id";
            $param = array(":image"=>$news->getImage(),":id_newscategory"=>$news->getIdNewcategory(),":title"=>$news->getTitle(),":description"=>$news->getDescription(),":datenews"=>$news->getDateNew(),":id_admin"=>$news->getIdAdmin(),":id"=>$news->getId());
            DPO::updateData($sql,$param);
        } catch (Exception $e){
            return null;
        }
    }
}


