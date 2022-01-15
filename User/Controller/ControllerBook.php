<?php
class ControllerBook
{
    public static function addFavorite($id_book, $id_student)
    {
        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();
        $modelFavorite->insert($id_student, $id_book);
        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $book = $modelBook->getByID($id_book);
        $html = '
        <a class="btn btn-light fa fa-long-arrow-left" href="../Controller/ControllerPage.php?page=home"></a>
        <button class="btn btn-danger m-3 fa fa-heart-o" id="btnDeFav" onClick="deFav();" value="' . $book['id'] . '"></button>';
        if ($book['status'] == 0) {
            $html .= '<a class="btn btn-success fa fa-check" href="../Controller/ControllerBook.php?book=issue&id=' . $book['id'] . '"></a>';
        }
        echo $html;
    }

    public static function delFavorite($id_book, $id_student)
    {
        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();
        $fav = $modelFavorite->getBySidAndBid($id_student, $id_book);
        $modelFavorite->delete($fav['id']);

        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $book = $modelBook->getByID($id_book);
        $html = '
        <a class="btn btn-light fa fa-long-arrow-left" href="../Controller/ControllerPage.php?page=home"></a>
        <button class="btn btn-success m-3 fa fa-heart-o" id="btnAddFav" onClick="addFav();" value="' . $book['id'] . '"></button>';
        if ($book['status'] == 0) {
            $html .= '<a class="btn btn-success fa fa-check" href="../Controller/ControllerBook.php?book=issue&id=' . $book['id'] . '"></a>';
        }
        echo $html;
    }

    public static function addFavoriteH($id_book, $id_student)
    {
        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();
        $modelFavorite->insert($id_student, $id_book);
    }

    public static function delFavoriteH($id_book, $id_student)
    {
        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();
        $fav = $modelFavorite->getBySidAndBid($id_student, $id_book);
        $modelFavorite->delete($fav['id']);
    }

    public static function delFavorite2($id_fav)
    {
        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();
        $modelFavorite->delete($id_fav);
        if (!empty($_SESSION['user'])) {
            $user = $_SESSION['user'];
        }
        $listBook = $modelFavorite->getAll($user['id']);
        if (isset($listBook['0'])) {
            $html = '<div class="card-body row d-flex justify-content-around" id="fav_list">';
            foreach ($listBook as $book) {
                $book['name'] = strlen($book['name']) > 30 ? substr($book['name'], 0, 30) . "..." : $book['name'];
                $html .= '<div class="card col-md-auto">';
                if ($book['image'] != null) {
                    $html .= '<img class="card-img-top" width="100px" height="150px" src="../../Admin/image/' . $book['image'] . '">';
                } else {
                    $html .= '<img class="card-img-top" width="100px" height="150px" src="https://via.placeholder.com/300x400">';
                }
                $html .= '
            <div class="card-body md-auto" style="margin-top: -25px">
            <h5 class="card-title my-4"><a href=?book=' . $book['id_book'] . '>' . $book['name'] . '</a></h5><hr/>
            <div class="d-flex justify-content-center">
            <button class="btn btn-danger rounded fa fa-trash" onClick="delFavorite2(' . $book['id'] . ');"></button>
            </div></div></div>';
            }
            $html .= '</div>';
            echo $html;
        } else {
            echo 'Không tồn tại dữ liệu !';
        }
    }

    public static function addIssue($id_book, $id_student)
    {
        include_once "../Model/ModelFavorite.php";
        $modelFavorite = new ModelFavorite();
        $fav = $modelFavorite->getBySidAndBid($id_student, $id_book);

        include_once "../Model/ModelIssue.php";
        $modelIssue = new ModelIssue();
        $modelIssue->insert($id_student, $id_book);
        $modelIssue->updateBookIssue($id_book);

        $html = '
        <a class="btn btn-light fa fa-long-arrow-left" href="../Controller/ControllerPage.php?page=home"></a>';
        if ($fav != null) {
            $html .= '<button class="btn btn-danger m-3 fa fa-heart-o" id="btnDeFav" onClick="deFav();" value="' . $id_book . '"></button>';
        } else {
            $html .= '<button class="btn btn-success m-3 fa fa-heart-o" id="btnAddFav" onClick="addFav();" value="' . $id_book . '"></button>';
        }
        echo $html;
    }

    public static function addRequest($id_student, $name, $author)
    {
        include_once "../Model/ModelBook.php";
        $modelBook = new ModelBook();
        $modelBook->insertRequest($id_student, $name, $author);
    }
}

if (!empty($_GET['book'])) {
    $page = $_GET['book'];
    if (!empty($_GET['id_fav'])) {
        $id_fav = $_GET['id_fav'];
    }
    if (!empty($_GET['id_book'])) {
        $id_book = $_GET['id_book'];
    }
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (!empty($_POST['author'])) {
        $author = $_POST['author'];
    }
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
                ControllerBook::delFavorite($id_book, $user['id']);
            } else {
                header("Location:./ControllerPage.php?page=login");
            }
            break;
        case 'favH':
            if (!empty($user)) {
                ControllerBook::addFavoriteH($id_book, $user['id']);
            } else {
                header("Location:./ControllerPage.php?page=login");
            }
            break;
        case 'defavH':
            if (!empty($user)) {
                ControllerBook::delFavoriteH($id_book, $user['id']);
            } else {
                header("Location:./ControllerPage.php?page=login");
            }
            break;
        case 'defav2':
            if (!empty($user)) {
                ControllerBook::delFavorite2($id_fav);
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
        case 'request':
            if (!empty($user)) {
                ControllerBook::addRequest($user['id'], $name, $author);
            } else {
                header("Location:./ControllerPage.php?page=login");
            }
            break;
        default:
            break;
    }
}
