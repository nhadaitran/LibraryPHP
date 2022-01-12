<?php
include_once "./BaseController.php";
class ControllerPage extends BaseController {

    public function responsePageHome(){
        $data = [];

        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $countBook = $modelBook->countBook();

        $data["countBook"] = $countBook;
        include_once "../Model/ModelUser.php";
        $modeUser = new ModelUser();
        $countUser = $modeUser->countUser();
        $data["countUser"] = $countUser;

        include_once "../Model/ModelIssue.php";
        $modeIssue = new ModelIssue();
        $countIssue = $modeIssue->countIssue();
        $data["countIssue"] = $countIssue;

        include_once "../Model/ModelReturn.php";
        $modeReturn = new ModelReturn();
        $countReturn = $modeReturn->countReturn();
        $data["countReturn"] = $countReturn;

        $this->view("home",$data);
    }

    public function responseTransactionPage(){

        $data = [];

        include_once "../Model/ModelIssue.php";
        $modelIssue = new ModelIssue();
        $issueList = $modelIssue->getAllIssue();
        $data["issueList"] = $issueList;

        include_once "../Model/ModelReturn.php";
        $modelReturn = new ModelReturn();
        $returnList = $modelReturn->getAllReturn();
        $data["returnList"] = $returnList;

        $this->view("transaction",$data);
    }

    public  function responseDirectoryManagementPage(){

        $data = [];

        include_once "../Model/ModelNewCategories.php";
        $modelNewCategories = new ModelNewCategories();
        $newCategoriesList = $modelNewCategories->getAllNewCategroies();
        $data['newCategoriesList'] = $newCategoriesList;

        include_once "../Model/ModelNews.php";
        $modelNew = new ModelNews();
        $newList = $modelNew -> getAllNews();
        $data['newList'] =   $newList;

        $this->view("directorymanagement",$data);
    }

    public  function responseBookPage(){

        $data = [];

        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $listBook = $modelBook->getAllBook();
        $data['listBook'] =  $listBook;

        include_once "../Model/ModelCategory.php";
        $modelCategory = new ModelCategory();
        $listCategory = $modelCategory->getAllCategory();
        $data['listCategory'] =  $listCategory;

        $this->view("book",$data);
    }

    public static function responseBookMemberPage(){
        include_once "../Model/ModelUser.php";
        $ModelUser = new ModelUser();
        $memberList = $ModelUser->getAllMember();

        include_once "../view/member.php";
    }

    public function responseInfoPage(){
        $this->view("info",null);
    }

    public function responseEditBook($id){

        $data = [];

        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $book = $modelBook->findBookById($id);
        $data['book'] = $book;

        include_once "../Model/ModelCategory.php";
        $modelCategory = new ModelCategory();
        $listCategory = $modelCategory->getAllCategory();
        $data['listCategory'] = $listCategory;

        $this->view("editBook",$data);
    }
}




if(!empty($_GET['page'])){
    $page = $_GET['page'];
    $ControllerPage = new ControllerPage();
        session_start();
    if(!empty($_SESSION['admin'])){
        $admin=$_SESSION['admin'];
    }
    switch ($page){
        case 'home':
            if(!empty($admin)){
                $ControllerPage->responsePageHome();
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }

            break;

        case 'transaction':
            if(!empty($admin)){
                $ControllerPage->responseTransactionPage();
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }
            break;

        case 'directorymanagement':
            if(!empty($admin)){
                $ControllerPage->responseDirectoryManagementPage();
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }
            break;

        case 'book':
            if(!empty($admin)){
                $ControllerPage->responseBookPage();
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
                $ControllerPage->responseInfoPage();
            }else{
                header("Location:./ControllerAdmin.php?action=logout");
            }
            break;
        case 'editBook':
            if(!empty($admin)){
                if(!empty($_GET['idBook'])){
                    $idBook = $_GET['idBook'];
                    $ControllerPage->responseEditBook($idBook);
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

