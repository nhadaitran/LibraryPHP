<?php


include_once "../Model/ModelCategory.php";

class ControllerCategory
{
    //API
    public static function searchCategory($search)
    {
        $modelCategory = new ModelCategory();
        $bookList = $modelCategory->searchCategory($search);
        ob_clean();
        echo json_encode($bookList, JSON_UNESCAPED_UNICODE);
    }

}

if (sizeof($_GET) > 0) {
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case 'searchCategory':
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    ControllerCategory::searchCategory($search);
                }
                break;
            case 'saveCategory':
                if(isset($_GET['nameCategory'])){
                    $nameCategory = $_GET['nameCategory'];
                    $modelCategory = new ModelCategory();
                    $modelCategory->saveCategory($nameCategory);
                    header("Location:./ControllerPage.php?page=book&category=save");
                }
        }
    }
}
if(sizeof($_POST>0)){
    if (!empty($_POST['action'])) {
        $action = $_POST['action'];
        switch ($action) {
            case 'saveCategory':
                if(isset($_POST['nameCategory'])){
                    $nameCategory = $_POST['nameCategory'];
                    $modelCategory = new ModelCategory();
                    $modelCategory->saveCategory($nameCategory);
                    header("Location:./ControllerPage.php?page=book&category=save");
                }
        }
    }
}



