<?php

include_once "../Model/ModelBook.php";
include_once "../../Entity/Book.php";
include_once "../../util/Contraints.php";
include_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

    //API
    public static function deleteBook($idBook){
        try{
            $modelBook = new ModelBook();
            $modelBook ->deleteBook($idBook);
        }catch (Exception $e){
            return null;
        }
    }
    public static function createFileExcelBook($listBook,$nameFile){
        try{
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            //Tạo style cho file excel

            $sheet->getColumnDimension("B")->setAutoSize(true);
            $sheet->getColumnDimension("C")->setAutoSize(true);
            $sheet->getColumnDimension("D")->setAutoSize(true);
            $sheet->getColumnDimension("E")->setAutoSize(true);
            $sheet->getColumnDimension("F")->setAutoSize(true);

            $sheet->setTitle("Report sách");
            $sheet->setCellValue('A1', 'ID');
            $sheet->setCellValue('B1', 'NAME BOOK');
            $sheet->setCellValue('C1', 'AUTHOR');
            $sheet->setCellValue('D1', 'CATEGORY');
            $sheet->setCellValue('E1', 'STATUS');
            $sheet->setCellValue('F1', 'DATE');

            $numRow = 2;
            foreach ($listBook as $Book) {
                $sheet->setCellValue('A' . $numRow, $Book["id"]);
                $sheet->setCellValue('B' . $numRow, $Book["name"]);
                $sheet->setCellValue('C' . $numRow, $Book["author"]);
                $sheet->setCellValue('D' . $numRow, $Book["nameCategory"]);
                $sheet->setCellValue('E' . $numRow, $Book["status"]);
                $sheet->setCellValue('F' . $numRow, $Book["date"]);
                $numRow++;
            }
            ob_clean();
            $writer = new Xlsx($spreadsheet);
            header('Content-type: application/vnd.ms-excel');
            header('Content-Disposition: attachment; filename="'.$nameFile.'.xls"');
            $writer->save('php://output');
        }catch (Exception $e){
            return null;
        }
    }

    //API
    public static function reportBook(){
        $modelBook = new ModelBook();
        $listBook = $modelBook ->reportBook();
        self::createFileExcelBook($listBook,"reportBook");
    }
    //API
    public static function reportBookByMonth(){
        $modelBook = new ModelBook();
        $listBook = $modelBook ->reportBookByMonth();
        self::createFileExcelBook($listBook,"reportBookByMonth");
    }
}

if(sizeof($_POST)>0){
    if(!empty($_POST['action'])){
        $action = $_POST['action'];
        switch ($action){
            case 'saveBook':
                $nameBook = $_POST['nameBook'];
                $nameAuthor = $_POST['nameAuthor'];
                $category = $_POST['category'];
                $decription = $_POST['decription'];
                echo  $nameBook;
                if($_FILES['fileImage']['error']==0&&!empty($_FILES['fileImage'])){

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
                }else{
                    $modelBook = new ModelBook();
                    $book = new Book(null,$nameBook,$nameAuthor,$category,null,$decription,null,'');
                    $modelBook->saveBook($book);
                    header("Location:./ControllerPage.php?page=book");
                }
                break;
            case 'editBook':
                try{
                    $idBook = $_POST['idBook'];
                    $nameBook = $_POST['nameBook'];
                    $nameAuthor = $_POST['nameAuthor'];
                    $category = $_POST['category'];
                    $decription = $_POST['decription'];
                    if($_FILES['fileImage']['error']==0&&!empty($_FILES['fileImage'])){

                        $modelBook = new ModelBook();
                        //xóa ảnh cũ
                        $oddBook = $modelBook->findBookById($idBook);
                        $oldImage = $oddBook['image'];
                        unlink('../image/'.$oldImage);


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


                        $book = new Book($idBook,$nameBook,$nameAuthor,$category,null,$decription,null,$nameImage);

                        $modelBook->updateBook($book);
                        $modelBook->updateImage($book->getName(),$book->getImage());

                        header("Location:./ControllerPage.php?page=book");
                    }else{
                        $modelBook = new ModelBook();
                        $book = new Book($idBook,$nameBook,$nameAuthor,$category,null,$decription,null,'');
                        $modelBook->updateBook($book);
                        header("Location:./ControllerPage.php?page=book");
                    }
                }catch (Exception $e){
                    echo $e->getMessage();
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
            case "reportBook":
                if(!empty($_GET['report'])){
                    $report = $_GET['report'];
                    switch ($report){
                        case "all":
                            ControllerBook::reportBook();
                            break;
                        case "month":
                            ControllerBook::reportBookByMonth();
                            break;
                    }
                }
                break;
        }
    }
}

