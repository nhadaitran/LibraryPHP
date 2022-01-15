<?php

include_once "../Model/ModelIssue.php";
include_once "../Model/ModelBook.php";
include_once "../Model/ModelReturn.php";
include_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class ControllerIssue{

    //API
    public static function searchIssue($search){
        $modelIsuue = new ModelIssue();
        $issueList = $modelIsuue ->searchIssue($search);
        ob_clean();
        echo json_encode($issueList,JSON_UNESCAPED_UNICODE);
    }

    //API
    public static function searchAllIssue(){
        $modelIsuue = new ModelIssue();
        $issueList = $modelIsuue->getAllIssue();
        ob_clean();
        echo json_encode($issueList,JSON_UNESCAPED_UNICODE);
    }

    public static function createFileExcelIssue($listIssue,$nameFile){
        try{
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            //Tạo style cho file excel
            $sheet->getColumnDimension("A")->setAutoSize(true);
            $sheet->getColumnDimension("B")->setAutoSize(true);
            $sheet->getColumnDimension("C")->setAutoSize(true);
            $sheet->getColumnDimension("D")->setAutoSize(true);
            $sheet->getColumnDimension("E")->setAutoSize(true);
            $sheet->getColumnDimension("F")->setAutoSize(true);

            $sheet->setTitle("Report Issue");
            $sheet->setCellValue('A1', 'ID');
            $sheet->setCellValue('B1', 'NAME BOOK');
            $sheet->setCellValue('C1', 'NAME STUDENT');
            $sheet->setCellValue('D1', 'NAME ADMIN');
            $sheet->setCellValue('E1', 'STATUS');
            $sheet->setCellValue('F1', 'DATE');

            $numRow = 2;
            foreach ($listIssue as $issue) {
                $sheet->setCellValue('A' . $numRow, $issue["id"]);
                $sheet->setCellValue('B' . $numRow, $issue["nameBook"]);
                $sheet->setCellValue('C' . $numRow, $issue["nameStudent"]);
                $sheet->setCellValue('D' . $numRow, $issue["nameAdmin"]);
                $sheet->setCellValue('E' . $numRow, $issue["status"]);
                $sheet->setCellValue('F' . $numRow, $issue["dateissue"]);
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
    public static function reportIssue(){
        $modelIsuue = new ModelIssue();
        $listIssue = $modelIsuue->reportIssue();
        self::createFileExcelIssue($listIssue,"reportIssue");
    }
    //API
    public static function reportIssueByDay(){
        $modelIsuue = new ModelIssue();
        $listIssue = $modelIsuue ->reportIssueByDay();
        self::createFileExcelIssue($listIssue,"reportIssueByDay");
    }

}


if(sizeof($_GET)>0){
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch ($action){
            case 'searchIssue':
                if(isset($_GET['search'])){
                    $search=$_GET['search'];
                    if(empty($search)){
                        ControllerIssue::searchAllIssue();
                    }else{
                        ControllerIssue::searchIssue($search);
                    }
                }
                break;
            case 'reportIssue':
                if(!empty($_GET["report"])){
                    $report = $_GET["report"];
                    switch ($report){
                        case 'all':
                            ControllerIssue::reportIssue();
                            break;
                        case "day":
                            ControllerIssue::reportIssueByDay();
                            break;
                    }
                }
                break;
        }
    }
}

if(isset($_POST['action'])){
    session_start();
    $idAD = $_SESSION['admin']['id'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    switch ($action){
        case 'yes':
            $modelIssue = new ModelIssue();
            $modelIssue->updateIssue($id,$idAD,0);
            header("Location: ./ControllerPage.php?page=transaction");
            break;
        case 'no':
            $modelIssue = new ModelIssue();
            $issue = $modelIssue->getIssue($id);
            $modelBook = new ModelBook();
            $modelBook->updateStatusBook($issue[0]['id_book'],0);
            $modelIssue->deleteIssue($id);
            header("Location: ./ControllerPage.php?page=transaction");
            break;
        case 'tra':
            $modelIssue = new ModelIssue();
            $issue = $modelIssue->getIssue($id);
            $modelIssue->updateIssue($id,$idAD,1);
            $modelBook = new ModelBook();
            $modelBook->updateStatusBook($issue[0]['id_book'],0);
            $modelReturn = new ModelReturn();
            $return = $modelReturn->insertReturn($id,$idAD);
            header("Location: ./ControllerPage.php?page=transaction");
            break;
    }
}
