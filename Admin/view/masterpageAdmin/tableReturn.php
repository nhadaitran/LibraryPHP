<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="accordion" id="accordionOne">

                    <div class="col-lg d-flex justify-content-center" style="margin:auto">
                        <button class="btn btn-light mb-5" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                            + Thêm
                        </button>
                        <div class="form-row col-md" style="margin-bottom: 3%;">
                            <form class="form-row col-md">
                                <div class="col-md">
                                    <input id="inputSearchReturn" class="form-control" type="search" placeholder="Nhập Thông Tin Cần Tìm...">
                                </div>
                            </form>
                        </div>
                        <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionOne ">
                            <form class="form-row col-md">
                                <div class="col-md">
                                    <input class="form-control" type="text" placeholder=" ID Thành viên..." required="required">
                                </div>
                                <div class="col-md">
                                    <input class="form-control" type="text" placeholder=" ID Sách..." required="required">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-light" type="submit">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name Admin</th>
                            <th scope="col">Name Student</th>
                            <th scope="col">Name Book</th>
                            <th scope="col">Date return</th>
                            <th scope="col">Setting</th>
                        </tr>
                        </thead>
                        <tbody id="tableReturn">
                        <?php
                        if(!empty($returnList)){
                            foreach ($returnList as $return){
                                echo '<tr class="trReturn">';
                                echo "<th scope='row'>" . $return['id'] . "</th>";
                                echo "<td>" . $return['nameAdmin'] . "</td>";
                                echo "<td>" . $return['nameStudent'] . "</td>";
                                echo "<td>" . $return['nameBook'] . "</td>";
                                echo "<td>" . $return['datereturn'] . "</td>";
                                echo " <td>
                                                                                       <button class='btn btn-primary zmdi zmdi-edit' type='button'/>
                                                                                       <button class='btn btn-danger zmdi zmdi-delete' type='button'/>
                                                                                  </td>";
                                echo "</tr>";
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