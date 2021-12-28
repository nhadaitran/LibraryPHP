<?php

include_once "../Model/ModelIssue.php";


class ControllerIssue{

    //API
    public static function searchIssue($search){
        $modelIsuue = new ModelIssue();
        $issueList = $modelIsuue ->searchIssue($search);
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
                    ControllerIssue::searchIssue($id);
                }
                break;
        }
    }
}
