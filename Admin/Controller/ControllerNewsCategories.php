<?php
include_once "../Model/ModelNewCategories.php";
if(isset($_POST['action'])){
    $action = $_POST['action'];
    $id = $_POST['id'];
    switch ($action){
        case 'saveCategory':
           $model = new ModelNewCategories();
           $nameNewsCategory = $_POST['nameCategory'];
           $model->insertNewsCategories($nameNewsCategory);
            header("Location: ./ControllerPage.php?page=directorymanagement");
            break;
        case 'delete':
            $model = new ModelNewCategories();
            $model->deleteNewsCategories($id);
            header("Location: ./ControllerPage.php?page=directorymanagement");
            break;
    }
}