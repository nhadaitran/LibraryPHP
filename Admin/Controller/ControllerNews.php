<?php
include_once "../Model/ModelNews.php";
include_once "../../Entity/News.php";
include "../../util/Contraints.php";
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'add':
            $id = "";
            $title = $_POST['title'];
            $category = $_POST['category'];
            $description = $_POST['description'];
            $date = date("Y-m-d");
            session_start();
            $idAD = $_SESSION['admin']['id'];
            if ($_FILES['fileImage']['error'] == 0 && !empty($_FILES['fileImage'])) {
                $fileNameImageTemp = $_FILES['fileImage']['name'];
                $urlImageTemp = $_FILES['fileImage']['tmp_name'];

                $fileType = substr($fileNameImageTemp, strrpos($fileNameImageTemp, '.'));

                $nameImage = $string = str_replace(' ', '', $title);
                $nameImage = Contraints::vn_to_str($nameImage);
                $nameImage = strtolower($nameImage);
                $nameImage = $nameImage . $fileType;

                move_uploaded_file($urlImageTemp, "../image/" . $_FILES['fileImage']['name']);

                rename("../image/" . $_FILES['fileImage']['name'], "../image/" . $nameImage);

                $modelNews = new ModelNews();
                $news = new News(null, $nameImage, $category, $title, $description, $date, $idAD);
                $modelNews->insertNews($news);
                header("Location: ../Controller/ControllerPage.php?page=directorymanagement&&savePost");
            } else {
                $modelNews = new ModelNews();
                $news = new News(null, null, $category, $title, $description, $date, $idAD);
                $modelNews->insertNews($news);
                header("Location: ../Controller/ControllerPage.php?page=directorymanagement&&savePost");
            }
            break;
        case 'update':
            $id = $_POST['idNews'];
            $title = $_POST['title'];
            $category = $_POST['category'];
            $description = $_POST['description'];
            $date = date("Y-m-d");
            session_start();
            $idAD = $_SESSION['admin']['id'];
            if ($_FILES['fileImage']['error'] == 0 && !empty($_FILES['fileImage'])) {
                $modelNews = new ModelNews();
                $oldNews = $modelNews->findNewsById($id);
                unlink('../image/' . $oldNews['image']);

                $fileNameImageTemp = $_FILES['fileImage']['name'];
                $urlImageTemp = $_FILES['fileImage']['tmp_name'];

                $fileType = substr($fileNameImageTemp, strrpos($fileNameImageTemp, '.'));

                $nameImage = $string = str_replace(' ', '', $title);
                $nameImage = Contraints::vn_to_str($nameImage);
                $nameImage = strtolower($nameImage);
                $nameImage = $nameImage . $fileType;

                move_uploaded_file($urlImageTemp, "../image/" . $_FILES['fileImage']['name']);

                rename("../image/" . $_FILES['fileImage']['name'], "../image/" . $nameImage);

                $modelNews = new ModelNews();
                $news = new News($id, $nameImage, $category, $title, $description, $date, $idAD);
                
                $modelNews->updateNews($news);
                header("Location: ../Controller/ControllerPage.php?page=directorymanagement&&savePost");
            } else {
                $modelNews = new ModelNews();
                $oldNews = $modelNews->findNewsById($id);
                $news = new News($id, $oldNews['image'], $category, $title, $description, $date, $idAD);
                $modelNews->updateNews($news);
                header("Location: ../Controller/ControllerPage.php?page=directorymanagement&&savePost");
            }

            break;
        case 'delete':
            $id = $_POST['id'];
            $modelNews = new ModelNews();
            $news = $modelNews->findNewsById($id);
            unlink('../image/' . $news['image']);
            $modelNews->deleteNews($id);
            header("Location: ../Controller/ControllerPage.php?page=directorymanagement&&savePost");
            break;
    }
}
