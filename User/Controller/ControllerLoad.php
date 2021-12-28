<?php
session_start();
if (!empty($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

include_once "../Model/ModelReturn.php";
$modelReturn = new ModelReturn();

include_once "../Model/ModelIssue.php";
$modelIssue = new ModelIssue();

include_once "../Model/ModelFavorite.php";
$modelFavorite = new ModelFavorite();
$listBook = $modelFavorite->getAll($user['id']);

if (!empty($_POST['categorybook'])) {
    if ($_POST['categorybook'] == 1) {
        $listBook = $modelIssue->getAll($user['id']);
    } else if ($_POST['categorybook'] == 2) {
        $listBook = $modelReturn->getAll($user['id']);
    }
}
if (isset($listBook['0'])) {
    if ($_POST['categorybook'] == 1) {
        $html = '<table class="table table-hover">
        <thead>
            <tr>                      
                <th scope="col">Ngày mượn</th>
                <th scope="col">Tiêu đề sách</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Trạng Thái</th>
            </tr>
        </thead>';
        foreach ($listBook as $book) {
            $book['name'] = strlen($book['name']) > 90 ? substr($book['name'], 0, 90) . "..." : $book['name'];
            $html .= '
            <tr role="row">
            <td>' . $book['dateissue'] . '</td>                        
            <td><a href=?book=' . $book['id_book'] . '>' . $book['name'] . '</a></td>
            <td>' . $book['author'] . '</td>
            <td><button class="btn btn-danger btn-sm" disabled="disable">Đang Mượn</button></td>';
            $html .= '</tr>';
        }
        $html .= '</table>';
        echo $html;
    } else if ($_POST['categorybook'] == 3) {
        $html = '<table class="table table-hover">
        <thead>
            <tr>                      
                <th scope="col">Mã sách</th>
                <th scope="col">Tiêu đề sách</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Trạng Thái</th>
            </tr>
        </thead>';
        foreach ($listBook as $book) {
            $book['name'] = strlen($book['name']) > 90 ? substr($book['name'], 0, 90) . "..." : $book['name'];
            $html .= '
            <tr role="row">
            <td>' . $book['id_book'] . '</td>
            <td><a href=?book=' . $book['id_book'] . '>' . $book['name'] . '</a></td>
            <td>' . $book['author'] . '</td>';
            if ($book['status'] == 1) {
                $html .= '
            <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>';
            } else {
                $html .= '
            <td><button class="btn btn-success btn-sm" disabled="disable">available</button></td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        echo $html;
    } else {
        $html = '<table class="table table-hover">
        <thead>
            <tr>                      
                <th scope="col">Ngày trả</th>
                <th scope="col">Tiêu đề sách</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Trạng Thái</th>
            </tr>
        </thead>';
        foreach ($listBook as $book) {
            $book['name'] = strlen($book['name']) > 90 ? substr($book['name'], 0, 90) . "..." : $book['name'];
            $html .= '
            <tr role="row">
            <td>' . $book['datereturn'] . '</td>                        
            <td><a href=?book=' . $book['id_book'] . '>' . $book['name'] . '</a></td>
            <td>' . $book['author'] . '</td>
            <td><button class="btn btn-success btn-sm" disabled="disable">Đã Trả</button></td>';
            $html .= '</tr>';
        }
        $html .= '</table>';
        echo $html;
    }
} else {
    $html = ' Không Tồn Tại Dữ Liệu ';
    echo $html;
}
