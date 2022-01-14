<?php

include_once "../Model/ModelIssue.php";
include_once "../Model/ModelBook.php";

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

if(isset($_POST['action'])){
    session_start();
    $idAD = $_SESSION['admin']['id'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    switch ($action){
        case 'yes':
            $modelIssue = new ModelIssue();
            $result = $modelIssue->updateIssue($id,$idAD);
            header("Location: ./ControllerPage.php?page=transaction");
            break;
        case 'no':
            $modelIssue = new ModelIssue();
            $issue = $modelIssue->getIssue($id);
            $modelBook = new ModelBook();
            $result=$modelBook->updateStatusBook($issue[0]['id_book'],0);
            $result = $modelIssue->deleteIssue($id);
            header("Location: ./ControllerPage.php?page=transaction");
            break;
    }
}
