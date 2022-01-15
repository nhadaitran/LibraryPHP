<?php

include_once "../Model/ModelReturn.php";
include_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class ControllerReturn
{
    //API
    public static function searchReturn($search){
        $modelReturn = new ModelReturn();
        $returnList = $modelReturn ->searchReturn($search);
        ob_clean();
        echo json_encode($returnList,JSON_UNESCAPED_UNICODE);
    }

    //API
    public static function searchAllReturn(){
        $modelReturn = new ModelReturn();
        $returnList  = $modelReturn ->getAllReturn();
        ob_clean();
        echo json_encode($returnList,JSON_UNESCAPED_UNICODE);
    }

    public static function createFileExcelReturn($listReturn,$nameFile){
        try{
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            //Tạo style cho file excel
            $sheet->getColumnDimension("A")->setAutoSize(true);
            $sheet->getColumnDimension("B")->setAutoSize(true);
            $sheet->getColumnDimension("C")->setAutoSize(true);
            $sheet->getColumnDimension("D")->setAutoSize(true);
            $sheet->getColumnDimension("E")->setAutoSize(true);

            $sheet->setTitle("Report Issue");
            $sheet->setCellValue('A1', 'ID');
            $sheet->setCellValue('B1', 'NAME BOOK');
            $sheet->setCellValue('C1', 'NAME STUDENT');
            $sheet->setCellValue('D1', 'NAME ADMIN');
            $sheet->setCellValue('E1', 'DATE');

            $numRow = 2;
            foreach ($listReturn as $return) {
                $sheet->setCellValue('A' . $numRow, $return["id"]);
                $sheet->setCellValue('B' . $numRow, $return["nameBook"]);
                $sheet->setCellValue('C' . $numRow, $return["nameStudent"]);
                $sheet->setCellValue('D' . $numRow, $return["nameAdmin"]);
                $sheet->setCellValue('E' . $numRow, $return["datereturn"]);
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
    public static function reportReturn(){
        $modelReturn = new ModelReturn();
        $listReturn = $modelReturn->reportReturn();
        self::createFileExcelReturn($listReturn,"reportReturn");
    }
    //API
    public static function reportReturnByDay(){
        $modelReturn = new ModelReturn();
        $listReturn = $modelReturn->reportReturnByDay();
        self::createFileExcelReturn($listReturn,"reportReturnByDay");
    }
}

if(sizeof($_GET)>0){
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch ($action){
            case 'searchReturn':
                if(isset($_GET['search'])){
                    $search=$_GET['search'];
                    if(empty($search)){
                        ControllerReturn::searchAllReturn();
                    }else{
                        ControllerReturn::searchReturn($search);
                    }
                }
                break;
            case "reportReturn":
                if(!empty($_GET["report"])){
                    $report = $_GET["report"];
                    switch ($report){
                        case 'all':
                            ControllerReturn::reportReturn();
                            break;
                        case "day":
                            ControllerReturn::reportReturnByDay();
                            break;
                    }
                }
                break;
        }
    }
}