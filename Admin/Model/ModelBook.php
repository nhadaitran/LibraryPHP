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
        $this->conn = null;
    }

    public function countBook()
    {
        try {

            $sql = "SELECT COUNT(id) as countBook FROM quanlythuvien.books";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result[0]['countBook'];
        } catch (Exception $e) {
            return null;
        }
    }

//    public function saveBook($book){
//        try {
//
//            $nameBook = $book->getName();
//            $author = $book->getAuthor();
//            $idCategory = $book->getIdCategory();
//            $description = $book->getDescription();
//            $urlImage = $book->getImage();
//            $date = date('Y-m-d');
//
//            $sql = " INSERT INTO quanlythuvien.books(name,author,id_category,description,image,date)"
//                    ."VALUES('$nameBook', '$author', '$idCategory', '$description','$urlImage', '$date')";
//            $this->conn->exec($sql);
//        } catch (Exception $e) {
//            echo $e->getMessage();
//           return null;
//        }
//    }
    public function saveBook($book)
    {
        try {

            $nameBook = $book->getName();
            $author = $book->getAuthor();
            $idCategory = $book->getIdCategory();
            $description = $book->getDescription();
            $urlImage = $book->getImage();
            $date = date('Y-m-d');

            $sql = " INSERT INTO quanlythuvien.books(name,author,id_category,description,date)"
                . "VALUES('$nameBook', '$author', '$idCategory', '$description', '$date')";
            $this->conn->exec($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function updateImage($nameBook, $urlImage)
    {
        try {

            $sql = "UPDATE quanlythuvien.books SET image=? WHERE name=? ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$urlImage, $nameBook]);
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function getAllBook()
    {
        try {

            $sql = "SELECT b.id, b.name AS nameBook, b.author, b.status, b.date AS dateAdd, ca.name AS nameCategory FROM quanlythuvien.books b"
                . " JOIN quanlythuvien.category ca on b.id_category = ca.id ";
            $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
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
                    . " WHERE b.id = '$search' OR b.name LIKE '%$search%' OR b.author LIKE '%$search%' ";
                $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
                $result = $stmt->fetchAll();
                return $result;
            } else {
                return $this->getAllBook();
            }
        } catch (Exception $e) {
            return null;
        }
    }

    public function searchBookByCategory($id)
    {
        try {
            if ($id == 0) {
                return $this->getAllBook();
            } else {
                $sql = "SELECT b.id, b.name AS nameBook, b.author, b.status, b.date AS dateAdd, ca.name AS nameCategory FROM quanlythuvien.books b"
                    . " JOIN quanlythuvien.category ca on b.id_category = ca.id "
                    . " WHERE b.id_category = $id";
                $stmt = $this->conn->query($sql, PDO::FETCH_ASSOC);
                $result = $stmt->fetchAll();
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
}
