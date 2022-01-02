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

    //API
    public static function searchAllIssue(){
        $modelIsuue = new ModelIssue();
        $issueList = $modelIsuue ->getAllIssue();
        ob_clean();
        echo json_encode($issueList,JSON_UNESCAPED_UNICODE);
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
        }
    }
}
