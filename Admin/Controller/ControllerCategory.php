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
        }
    }
}



