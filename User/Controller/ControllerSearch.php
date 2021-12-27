<?php
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
        </tr>
    </thead>';
    foreach ($listBook as $book) {
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
        $html .= '</tr>';
    }
    $html .= '</table>';
    echo $html;
} else {
    $html = '        
         <form class="form-row col-md mb-3 mt-3">
             <div class="col-md">
                <input class="form-control" type="text" placeholder=" Tiêu Đề Sách..." required="required">
             </div>
             <div class="col-md">
                <input class="form-control" type="text" placeholder=" Tác Giả..." required="required">
            </div>
            <div class="col-md-2">
                <button class="btn btn-light" type="submit">+ Yêu cầu sách</button>
             </div>
         </form>
    ';
    echo $html;
}
