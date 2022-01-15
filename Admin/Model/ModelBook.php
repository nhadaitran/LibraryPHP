<?php
include_once "../../util/DPO.php";
include_once "../../Entity/Book.php";

class ModelBook
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

    public function countBook()
    {
        try {
            $sql = "SELECT COUNT(id) as countBook FROM quanlythuvien.books";
            $result = DPO::getAllData($sql);
            return $result[0]['countBook'];
        } catch (Exception $e) {
            return null;
        }
    }

    public function saveBook($book)
    {
        try {

            $nameBook = $book->getName();
            $author = $book->getAuthor();
            $idCategory = $book->getIdCategory();
            $description = $book->getDescription();
            $date = date('Y-m-d');

            $sql = " INSERT INTO quanlythuvien.books(name,author,id_category,description,date)"
                . "VALUES('$nameBook', '$author', '$idCategory', '$description', '$date')";
            $this->conn->exec($sql);
        } catch (Exception $e) {
            return null;
        }
    }

    public function updateImage($nameBook, $urlImage)
    {
        try {

            $sql = "UPDATE quanlythuvien.books SET image=? WHERE name=? ";
            $param = array($urlImage, $nameBook);
            DPO::updateData($sql,$param);
        } catch (Exception $e) {
            return null;
        }
    }

    public function getAllBook()
    {
        try {

            $sql = "SELECT b.id, b.name AS nameBook, b.author, b.status, b.date AS dateAdd, ca.name AS nameCategory FROM quanlythuvien.books b"
                . " JOIN quanlythuvien.category ca on b.id_category = ca.id ";
            $result = DPO::getAllData($sql);
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }

    public function findBookById($id){
        try {

            $sql = "SELECT * FROM quanlythuvien.books WHERE id =:id ";
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

    public function searchBook($search)
    {
        try {
            if (!empty($search)) {
                $sql = "SELECT b.id, b.name AS nameBook, b.author, b.status, b.date AS dateAdd, b.image, ca.name AS nameCategory FROM quanlythuvien.books b"
                    . " JOIN quanlythuvien.category ca on b.id_category = ca.id "
                    . " WHERE b.id =:search OR b.name LIKE '%$search%' OR b.author LIKE '%$search%' ";
                $param = array(":search"=>$search);
                $result = DPO::getData($sql,$param);
                return $result;
            } else {
                return $this->getAllBook();
            }
        } catch (Exception $e) {
            return null;
        }
    }

    public function searchBookByCategory($idCategory)
    {
        try {
            if ($idCategory == 0) {
                return $this->getAllBook();
            } else {
                $sql = "SELECT b.id, b.name AS nameBook, b.author, b.status, b.date AS dateAdd, ca.name AS nameCategory FROM quanlythuvien.books b"
                    . " JOIN quanlythuvien.category ca on b.id_category = ca.id "
                    . " WHERE b.id_category =:idCategory ";
                $param = array("idCategory"=>$idCategory);
                $result = DPO::getData($sql,$param);
                return $result;
            }
        } catch (Exception $e) {
            return null;
        }
    }

    public function deleteBook($id){
        try {
            $book=$this->searchBook($id);
            unlink('../image/'.$book[0]['image']);
            $sql = "DELETE FROM quanlythuvien.books WHERE id=? ";
            $stmt= $this->conn->prepare($sql);
            $stmt->execute([$id]);
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function updateBook($book){
        try {
            $sql = "UPDATE quanlythuvien.books SET name=?, author=?, id_category=?, description=? WHERE id=? ";
            $param = array($book->getName(), $book->getAuthor(), $book->getIdCategory(), $book->getDescription(), $book->getId());
            DPO::updateData($sql,$param);
        } catch (Exception $e) {
            return null;
        }
    }

    public function updateStatusBook($id,$status){
        try {
            $sql = "UPDATE quanlythuvien.books SET status=:status WHERE id=:id ";
            $param = array(":status"=>$status,":id"=>$id);
            DPO::updateData($sql,$param);
        } catch (Exception $e) {
            return null;
        }
    }

    public function reportBook(){
        try{
            $sql = " SELECT bo.id, bo.name, bo.author, ca.name AS nameCategory, IF(bo.status = 0,'chưa mượn','đã mượn') AS status, bo.date "
                    ." FROM quanlythuvien.books bo "
                    ." JOIN quanlythuvien.category ca ON bo.id_category = ca.id ";
            $result = DPO::getAllData($sql);
            return $result;
        }catch (Exception $e){
            return null;
        }
    }
}
