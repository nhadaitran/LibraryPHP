<?php
session_start();
include_once "../Model/ModelBook.php";
$modelBook = new ModelBook();
$listBook = $modelBook->getAll();
if (!empty($_POST['search'])) {
    $title = $_POST['search'];
    $listBook = $modelBook->searchBooks($title);
} else if (!empty($_POST['category'])) {
    $id = $_POST['category'];
    $listBook = $modelBook->searchBooksByCategory($id);
}
if (isset($listBook['0'])) {
    $html = '<table class="table table-hover">
    <thead>
        <tr>                      
            <th scope="col">Mã sách</th>
            <th scope="col">Tiêu đề sách</th>
            <th scope="col">Tác giả</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Yêu Thích</th>
        </tr>
    </thead>';
    foreach ($listBook as $book) {
        $book['name'] = strlen($book['name']) > 90 ? substr($book['name'], 0, 90) . "..." : $book['name'];
        $html .= '
        <tr role="row">
        <td>' . $book['id'] . '</td>
        <td><a href=?book=' . $book['id'] . '>' . $book['name'] . '</a></td>
        <td>' . $book['author'] . '</td>';
        if ($book['status'] == 1) {
            $html .= ' 
            <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>';
        } else {
            $html .= ' 
            <td><button class="btn btn-success btn-sm" disabled="disable">available</button></td>';
        }
        if ($book['fid'] != null) {
            $html .= ' <td><button class="btn btn-danger fa fa-heart-o"onClick="deFavH(' . $book['id'] . ');"></button></td>';
        } else {
            $html .= ' <td><button class="btn btn-success fa fa-heart-o" onClick="addFavH(' . $book['id'] . ');"></button></td>';
        }
        $html .= '</tr>';
    }
    $html .= '</table>';
    echo $html;
} else {
    $html = '        
         <form class="form-row col-md mb-3 mt-3" method="post" onSubmit="return requestBook();">
             <div class="col-md">
                <input class="form-control" id="nameRequest" type="text" placeholder=" Tiêu Đề Sách..." required>
             </div>
             <div class="col-md">
                <input class="form-control" id="authorRequest" type="text" placeholder=" Tác Giả..." required>
            </div>
            <div class="col-md-2">
                <button class="btn btn-light" type="submit" id="btnRequest">+ Yêu cầu sách</button>
             </div>
         </form>
    ';
    echo $html;
}
