<?php

class ControllerPage
{
    public static function responsePageHome()
    {

        include_once "../Model/ModelNews.php";
        $modelNews = new ModelNews();
        $listNews = $modelNews->getAllNews();


        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $listBook = $modelBook->getAll();

        if (!empty($_SESSION['user'])) {
            $user = $_SESSION['user'];
        }

        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();
        $listBookFav = $modelFavorite->getAll($user['id']);

        include_once "../Model/ModelCategory.php";
        $modelCategory = new ModelCategory();
        $listCat = $modelCategory->getAll();

        include_once "../view/home.php";
    }

    public static function responsePageFavorite($id_student)
    {
        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();
        $listBook = $modelFavorite->getAll($id_student);

        include_once "../view/favorite.php";
    }

    public static function responsePageLogin()
    {
        session_destroy();
        include_once "../view/login.php";
    }

    public static function responsePageRegister()
    {
        include_once "../view/register.php";
    }

    public static function responsePageContact()
    {
        include_once "../view/contact.php";
    }

    public static function responsePageNews()
    {
        include_once "../Model/ModelNews.php";
        $modelNews = new ModelNews();
        $listNews = $modelNews->getAllNews();
        $listNewsCa = $modelNews->getAllNewsCa();        
        include_once "../view/news.php";   
    }

    public static function responsePageBook($id)
    {
        if (!empty($_SESSION['user'])) {
            $user = $_SESSION['user'];
        }
        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();
        $fav = $modelFavorite->getBySidAndBid($user['id'], $id);

        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $book = $modelBook->getByID($id);
        include_once "../view/book.php";
    }

    public static function responsePageNewsPost($id)
    {
        include_once "../Model/ModelNews.php";
        $modelNews = new modelNews();
        $news = $modelNews->getNews($id);
        $listNewsCa = $modelNews->getAllNewsCa();                
        include_once "../view/news_post.php";
    }
}

if (!empty($_GET['book'])) {
    $id = $_GET['book'];
    session_start();
    if (!empty($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }
    if (!empty($user)) {
        ControllerPage::responsePageBook($id);
    } else {
        ControllerPage::responsePageLogin();
    }
}

if (!empty($_GET['news'])) {
    $id = $_GET['news'];
    session_start();
    if (!empty($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }
    if (!empty($user)) {
        ControllerPage::responsePageNewsPost($id);
    } else {
        ControllerPage::responsePageLogin();
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
                ControllerPage::responsePageLogin();
            }
            break;
        case 'login':
            ControllerPage::responsePageLogin();
            break;
        case 'fav':
            ControllerPage::responsePageFavorite($user['id']);
            break;
        case 'register':
            ControllerPage::responsePageRegister();
            break;
        case 'contact':
            ControllerPage::responsePageContact();
            break;
        case 'news':
            ControllerPage::responsePageNews();
            break;
        default:
            break;
    }
}
