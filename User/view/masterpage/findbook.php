<div class="tab-pane active" id="find">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordionOne">
                        <div class="col-lg d-flex justify-content-center">
                            <button class="btn btn-light mb-5" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                + Yêu Cầu Sách
                            </button>                            
                            <div class="form-row col-md-2">            
                            <form method="post" action="../Controller/ControllerBook.php">
                                <select name="category" id="category" class="form-control" required onchange="search_cat();">
                                    <option value="0">Danh Mục</option>
                                    <?php
                                    foreach ($listCat as $cat){
                                    echo '<option value="'.$cat->getId().'"><a href=?category='.$cat->getId().'>'.$cat->getName().'</a></option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-row col-md" >
                                        <input class="form-control" type="text" name="search" id="search" placeholder="Tìm kiếm bằng tiêu đề sách..." onkeyup="search_data()">
                            </div>
                            <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionOne ">
                                <form class="form-row col-md">
                                    <div class="col-md">
                                        <input class="form-control" type="text" placeholder=" Tiêu Đề Sách..." required="required">
                                    </div>
                                    <div class="col-md">
                                        <input class="form-control" type="text" placeholder=" Tác Giả..." required="required">
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-light" type="submit">Gửi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="table-responsive" id="search_table">
                    <table class="table table-hover">
                        <thead>
                            <tr>                      
                                <th scope="col">Mã sách</th>
                                <th scope="col">Tiêu đề sách</th>
                                <th scope="col">Tác giả</th>
                                <th scope="col">Trạng Thái</th>
                            </tr>
                        </thead>
                        <?php                         
                        ?>
                        <tbody>
                            <?php
                            foreach($listBook as $book){
                                echo '<tr role="row">';
                                echo '<td>' . $book->getId() . '</td>';
                                echo '<td><a href=?=bookid=>' . $book->getName() . '</a></td>';
                                echo '<td>' . $book->getAuthor() . '</td>';
                                if($book->getStatus() ==1){
                                    echo ' <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>';
                                }                                
                                else{
                                    echo ' <td><button class="btn btn-success btn-sm" disabled="disable">available</button></td>';
                                }
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <nav class="mt-3">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a> </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>