<?php

class ControllerPage
{
    public static function responsePageHome()
    {
        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $listBook = $modelBook->getAll();

        include_once "../Model/ModelCategory.php";
        $modelCategory = new ModelCategory();
        $listCat = $modelCategory->getAll();

        include_once "../view/home.php";
    }
}

if (!empty($_GET['page'])) {
    $page = $_GET['page'];
    session_start();
    if (!empty($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }
    switch ($page) {
        case 'home':
            if (!empty($user)) {
                ControllerPage::responsePageHome();
            } else {
                header("Location:./ControllerUser.php?action=logout");
            }

        default:
            break;
    }
}
