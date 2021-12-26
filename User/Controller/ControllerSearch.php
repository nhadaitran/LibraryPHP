<?php
$title=$_POST['search'];
include_once "../Model/ModelBook.php";
$modelBook = new ModelBook();
$listBook=$modelBook->searchBooks($title);
if(isset($listBook['0'])){
	$html='<table class="table table-hover">
    <thead>
        <tr>                      
            <th scope="col">Mã sách</th>
            <th scope="col">Tiêu đề sách</th>
            <th scope="col">Tác giả</th>
            <th scope="col">Trạng Thái</th>
        </tr>
    </thead>';
	foreach($listBook as $book){
		$html.='
        <tr role="row">
        <td>' . $book->getId() . '</td>
        <td><a href="book.php">' . $book->getName() . '</a></td>
        <td>' . $book->getAuthor() . '</td>';
        if($book->getStatus() ==1){
            $html.= ' <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>';
        }                                
        else{
            $html.=' <td><button class="btn btn-success btn-sm" disabled="disable">available</button></td>';
        }		
        $html.='</tr>';
	}	
	$html.='</table>';
	echo $html;	
}else{
	echo "Không tìm thấy dữ liệu";
}
