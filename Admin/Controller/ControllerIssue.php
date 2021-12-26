<?php

include_once "../Model/ModelIssue.php";


class ControllerIssue{

    //API
    public static function findByIdIssueOrIdBook($id){
        $modelIsuue = new ModelIssue();
        $issueList = $modelIsuue ->findByIdIssueOrIdBook($id);
        ob_clean();
        echo json_encode($issueList,JSON_UNESCAPED_UNICODE);
    }

}


if(sizeof($_GET)>0){
    if(!empty($_GET['action'])){
        $action = $_GET['action'];
        switch ($action){
            case 'searchIssue':
                if(!empty($_GET['idIssueOrBook'])){
                    $id=$_GET['idIssueOrBook'];
                    ControllerIssue::findByIdIssueOrIdBook($id);
                }
                break;
        }


    }
}
