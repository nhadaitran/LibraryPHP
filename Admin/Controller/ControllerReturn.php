<?php

include_once "../Model/ModelReturn.php";
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
        }
    }
}