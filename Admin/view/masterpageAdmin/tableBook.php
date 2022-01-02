<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="accordion" id="accordionOne">
                    <div class="col-lg d-flex justify-content-center" style="margin:auto">
                        <div class="form-row col-md-2">
                            <select id="selectCategory" class="form-control" required>
                                <option value="0">- - All - -</option>
                                <?php
                                if(!empty($listCategory)){
                                    foreach ($listCategory as $category){
                                        echo  '<option value="'.$category['id'].'">'.'- - '.$category['name']. ' - -'.'</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-row col-md" style="margin-bottom: 3%;">
                            <div class="form-row col-md">
                                <div class="col-md">
                                    <input id="inputSearchBook" class="form-control" type="text" name="search" placeholder="Nhập thông tin cần tìm">
                                </div>
                            </div>
                        </div>

                        <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionOne ">
                            <form class="form-row col-md">
                                <div class="col-md">
                                    <input class="form-control" type="text" placeholder=" Student ID..." required="required">
                                </div>
                                <div class="col-md">
                                    <input class="form-control" type="text" placeholder=" Book ID..." required="required">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-light" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name Book</th>
                            <th scope="col">Author</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date Add</th>
                            <th scope="col">Setting</th>
                        </tr>
                        </thead>
                        <tbody id="tableBook">
                        <?php

                        if(!empty($listBook)){
                            foreach ($listBook as $book){
                                $status = "Chưa mượn";
                                if($book['status']==1){
                                    $status="Đã mượn";
                                }
                                $idBook = $book["id"];

                                echo '<tr class="trBook">'
                                    ."<th scope='row'>".$book["id"].'</th>'
                                    .'<td>'.$book['nameBook'].'</td>'
                                    .'<td>'.$book['author'].'</td>'
                                    .'<td>'.$book['nameCategory'].'</td>'
                                    .'<td>'.$status.'</td>'
                                    .'<td>'.$book["dateAdd"].'</td>'
                                    .'<td>'
                                    .'<a href="ControllerPage.php?page=editBook&idBook='.$idBook.'" class="btn btn-primary zmdi zmdi-edit"  type="button"></a>'
                                    .'<button id=""  data-toggle="modal" data-target="#exampleModal" class="deleteBook btn btn-danger zmdi zmdi-delete" value="'.$book["id"].'" type="button"></button>'
                                    .'</td>'
                                    .'</tr>';
                            }
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
