<?php

include_once "../Model/ModelBook.php";
include_once "../../Entity/Book.php";
include "../../util/Contraints.php";



class ControllerBook
{
    //API
    public static function searchBook($search){
        $modelBook = new ModelBook();
        $bookList = $modelBook ->searchBook($search);
        ob_clean();
        echo json_encode($bookList,JSON_UNESCAPED_UNICODE);
    }

    //API
    public static function searchBookByCategory($id){
        $modelBook = new ModelBook();
        $bookList = $modelBook ->searchBookByCategory($id);
        ob_clean();
        echo json_encode($bookList,JSON_UNESCAPED_UNICODE);
    }

    public static function deleteBook($idBook){
        try{
            $modelBook = new ModelBook();
            $modelBook ->deleteBook($idBook);
            header("HTTP/1.1 200 OK");
        }catch (Exception $e){
            header("HTTP/1.1 500 ERROR");
        }
    }
}

if(sizeof($_POST)>0){
    if(!empty($_POST['action'])){
        $action = $_POST['action'];
        switch ($action){
            case 'saveBook':
                if($_FILES['fileImage']['error']==0){

                    $nameBook = $_POST['nameBook'];
                    $nameAuthor = $_POST['nameAuthor'];
                    $category = $_POST['category'];
                    $decription = $_POST['decription'];

                    //xử lý file ảnh
                    $fileNameImageTemp = $_FILES['fileImage']['name'];
                    $urlImageTemp = $_FILES['fileImage']['tmp_name'];

                    //lấy đuôi file
                    $fileType = substr($fileNameImageTemp,strrpos($fileNameImageTemp,'.')) ;

                    //lấy tên book làm tên file ảnh
                    $nameImage = $string = str_replace(' ', '', $nameBook);
                    $nameImage = Contraints::vn_to_str($nameImage);
                    $nameImage = strtolower($nameImage);
                    $nameImage = $nameImage.$fileType;
                    //chuyển file tử thư mục temp server sang thư mục web
                    move_uploaded_file($urlImageTemp,"../image/".$_FILES['fileImage']['name']);

                    //đổi têm file thành ten sach
                    rename("../image/".$_FILES['fileImage']['name'],"../image/".$nameImage);


                    $modelBook = new ModelBook();
                    $book = new Book(null,$nameBook,$nameAuthor,$category,null,$decription,null,$nameImage);

                    $modelBook->saveBook($book);
                    $modelBook->updateImage($book->getName(),$book->getImage());

                    header("Location:./ControllerPage.php?page=book");
                }
                break;
        }
    }
}

if(sizeof($_GET)>0){
    if(!empty($_GET['action'])){
        $action = $_GET['action'];
        switch ($action){
            case 'searchBook':
                if(isset($_GET['search'])){
                    $search=$_GET['search'];
                    ControllerBook::searchBook($search);
                }
                break;
            case 'searchBookByCategory':
                $Category = $_GET['search'];
                ControllerBook::searchBookByCategory($Category);
                break;
            case 'deleteBook':
                $idBook = $_GET['idBook'];
                ControllerBook::deleteBook($idBook);
                break;
        }
    }
}



