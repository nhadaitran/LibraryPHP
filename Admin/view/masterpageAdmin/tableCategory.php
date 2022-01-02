<div class="container-fluid ">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="accordion" id="accordionOne">
                    <div class="col-lg d-flex justify-content-center" style="margin:auto">
                        <div class="form-row col-md" style="margin-bottom: 3%;">
                            <div class="form-row col-md">
                                <div class="col-md">
                                    <input id="inputSearchCategory" class="form-control" type="text" placeholder="Tìm kiếm Id thể loại hoặc tên thể loại">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table >
                        <tr>
                            <form id="" action="#" method="post" class="row">
                                <td>
                                    <label>Tên thể loại:</label>
                                </td>
                                <td>
                                    <input type="text" name="nameBook" class="form-control form-control-rounded" id="input-6">
                                </td>
                                <td>
                                    <button class="btn btn-primary type="button" >Thêm</button>
                                </td>
                            </form>
                        </tr>
                    </table>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name Category</th>
                            <th scope="col">Count Book</th>
                            <th scope="col">Setting</th>
                        </tr>
                        </thead>
                        <tbody id="tableCategory">
                        <?php
                        if(!empty($listCategory)){
                            foreach ($listCategory as $category){
                                echo '<tr class="trCategory">'
                                    .'<th scope="row">'.$category['id'].'</th>'
                                    .'<td>'.$category["name"].'</td>'
                                    .'<td>'.$category["countBook"].'</td>'
                                    .'<td>'
                                    .'<button class="btn btn-primary zmdi zmdi-edit" type="button"/>'
                                    .'<button class="btn btn-danger zmdi zmdi-delete" type="button"/>'
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
