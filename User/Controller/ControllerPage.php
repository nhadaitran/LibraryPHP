<?php


function responsePageHome(){

    include_once "../Model/ModelBook.php";
    $modelBook = new ModelBook();
    $listBook=$modelBook->getAll();

    include_once "../Model/ModelCategory.php";
    $modelCategory = new ModelCategory();
    $listCat=$modelCategory->getAll();
    
    // include_once "../Model/ModelUser.php";
    // $modeUser = new ModelUser();
    // $countUser = $modeUser->countUser();

    // include_once "../Model/ModelIssue.php";
    // $modeIssue = new ModelIssue();
    // $countIssue = $modeIssue->countIssue();

    // include_once "../Model/ModelReturn.php";
    // $modeReturn = new ModelReturn();
    // $countReturn = $modeReturn->countReturn();

    include_once "../view/home.php";
}


if(!empty($_GET['page'])){
    $page = $_GET['page'];
    switch ($page){
        case 'home':
            responsePageHome();
            break;

        case 'transaction':
            include_once "../view/transaction.php";
            break;

        case 'directorymanagement':
            include_once "../view/directorymanagement.php";
            break;

        case 'book':
            include_once "../view/book.php";
            break;

        case 'member':
            include_once "../view/member.php";
            break;

        case 'info':
            include_once "../view/info.php";
            break;

        default:
            break;

    }

}

