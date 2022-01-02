<?php

class ControllerPage{

    public static function responsePageHome(){

        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $countBook = $modelBook->countBook();

        include_once "../Model/ModelUser.php";
        $modeUser = new ModelUser();
        $countUser = $modeUser->countUser();

        include_once "../Model/ModelIssue.php";
        $modeIssue = new ModelIssue();
        $countIssue = $modeIssue->countIssue();

        include_once "../Model/ModelReturn.php";
        $modeReturn = new ModelReturn();
        $countReturn = $modeReturn->countReturn();

        include_once "../view/home.php";
    }

    public static function responseTransactionPage(){

        include_once "../Model/ModelIssue.php";
        $modelIssue = new ModelIssue();
        $issueList = $modelIssue->getAllIssue();

        include_once "../Model/ModelReturn.php";
        $modelReturn = new ModelReturn();
        $returnList = $modelReturn->getAllReturn();

        include_once "../view/transaction.php";
    }

    public static function responseDirectoryManagementPage(){

        include_once "../Model/ModelNewCategories.php";
        $modelNewCategories = new ModelNewCategories();
        $newCategoriesList = $modelNewCategories->getAllNewCategroies();

        include_once "../Model/ModelNews.php";
        $modelNew = new ModelNews();
        $newList = $modelNew -> getAllNews();


        include_once "../view/directorymanagement.php";
    }

    public static function responseBookPage(){

        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $listBook = $modelBook->getAllBook();

        include_once "../Model/ModelCategory.php";
        $modelCategory = new ModelCategory();
        $listCategory = $modelCategory->getAllCategory();

        include_once "../view/book.php";
    }

    public static function responseBookMemberPage(){
        include_once "../view/member.php";
    }

    public static function responseInfoPage(){
        include_once "../view/info.php";
    }

    public static function responseEditBook($id){

        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $book = $modelBook->findBookById($id);

        include_once "../Model/ModelCategory.php";
        $modelCategory = new ModelCategory();
        $listCategory = $modelCategory->getAllCategory();

        include_once "../view/editBook.php";
    }
}




if(!empty($_GET['page'])){
    $page = $_GET['page'];
    session_start();
    if(!empty($_SESSION['admin'])){
        $admin=$_SESSION['admin'];
    }
    switch ($page){
        case 'home':
            if(!empty($admin)){
                ControllerPage::responsePageHome();
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }

            break;

        case 'transaction':
            if(!empty($admin)){
                ControllerPage::responseTransactionPage();
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }
            break;

        case 'directorymanagement':
            if(!empty($admin)){
                ControllerPage::responseDirectoryManagementPage();
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }
            break;

        case 'book':
            if(!empty($admin)){
                ControllerPage::responseBookPage();
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }
            break;

        case 'member':
            if(!empty($admin)){
                ControllerPage::responseBookMemberPage();
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }
            break;

        case 'info':
            if(!empty($admin)){
                ControllerPage::responseInfoPage();
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }
            break;
        case 'editBook':
            if(!empty($admin)){
                if(!empty($_GET['idBook'])){
                    $idBook = $_GET['idBook'];
                    ControllerPage::responseEditBook($idBook);
                }
                else{
                    header("Location:./ControllerAdmin.php?action=logout");
                }
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }
            break;
        default:
            break;

    }

}

