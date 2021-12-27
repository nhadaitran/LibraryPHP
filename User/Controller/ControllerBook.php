<?php
class ControllerBook
{
    public static function addFavorite($id_book, $id_student)
    {
        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();

        $modelFavorite->insert($id_student, $id_book);
        header("Location:./ControllerPage.php?book=$id_book");
    }

    public static function delFavorite($id_book, $id_fav)
    {
        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();

        $modelFavorite->delete($id_fav);
        header("Location:./ControllerPage.php?book=$id_book");
    }

    public static function addIssue($id_book, $id_student)
    {
        include_once "../Model/ModelIssue.php";
        $modelIssue = new ModelIssue();

        $modelIssue->insert($id_student, $id_book);
        header("Location:./ControllerPage.php?book=$id_book");
    }
}

if (!empty($_GET['book'])) {
    $page = $_GET['book'];
    $id_book = $_GET['id'];
    $id_fav = $_GET['favid'];
    session_start();
    if (!empty($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }
    switch ($page) {
        case 'fav':
            if (!empty($user)) {
                ControllerBook::addFavorite($id_book, $user['id']);
            } else {
                header("Location:./ControllerPage.php?page=login");
            }
            break;
        case 'defav':
            if (!empty($user)) {
                ControllerBook::delFavorite($id_book, $id_fav);
            } else {
                header("Location:./ControllerPage.php?page=login");
            }
            break;
        case 'issue':
            if (!empty($user)) {
                ControllerBook::addIssue($id_book, $user['id']);
            } else {
                header("Location:./ControllerPage.php?page=login");
            }
            break;
        default:
            break;
    }
}
