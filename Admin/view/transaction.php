
<!DOCTYPE html>
<html lang="en">
<!--    ajax-->

<script>
</script>



    <?php include "masterpageAdmin/header.php" ?>
    <body class="bg-theme bg-theme2">
        <!-- Start wrapper-->
        <div id="wrapper">

            <!--Start sidebar-wrapper-->
            <?php include "masterpageAdmin/menuleft.php" ?>
            <!--End sidebar-wrapper-->

            <!--Start topbar header-->
            <?php include "masterpageAdmin/menutop.php" ?>

            <!--End topbar header-->

            <div class="clearfix"></div>

            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#issue" data-toggle="pill" class="nav-link active"><i class="zmdi zmdi-plus-square"></i> <span class="hidden-xs">Danh sách mượn</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#return" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-assignment-return"></i> <span class="hidden-xs">danh sách trả</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content p-3">

<!--                                    Start table Isuue-->
                                    <div class="tab-pane active" id="issue">
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
                                                                <div class="form-row col-md-2">
                                                                    <select name="category" class="form-control" required>
                                                                        <option value="sid">- - ID Thành viên - -</option>
                                                                        <option value="bid" selected="selected">- - ID Sách - -</option>

                                                                    </select>
                                                                </div>

                                                                <div class="form-row col-md" style="margin-bottom: 3%;">
                                                                    <form id="searchIssue" class="form-row col-md">
                                                                        <div class="col-md">
                                                                            <input class="form-control" type="search" placeholder="Nhập ID Thành Viên Hoặc ID Sách...">
                                                                        </div>
                                                                        <div class="col-md-0">
                                                                            <button class="btn btn-light" type="submit">Tìm kiếm</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionOne ">
                                                                    <form id="addIssue" class="form-row col-md">
                                                                        <div class="col-md">
                                                                            <input class="form-control" type="text" placeholder=" ID Thành viên..." required="required">
                                                                        </div>
                                                                        <div class="col-md">
                                                                            <input class="form-control" type="text" placeholder=" ID Sách..." required="required">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <button class="btn btn-light" type="submit">Thêm</button>
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
                                                                    <th scope="col">Admin Name</th>
                                                                    <th scope="col">Student Name</th>
                                                                    <th scope="col">Book Name</th>
                                                                    <th scope="col">Date issue</th>
                                                                    <th scope="col">Setting</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <?php
                                                                        if(!empty($issueList)){
                                                                            foreach ($issueList as $issue){
                                                                                echo "<th scope='row'>" . $issue['id'] . "</th>";
                                                                                echo "<td>" . $issue['nameAdmin'] . "</td>";
                                                                                echo "<td>" . $issue['nameStudent'] . "</td>";
                                                                                echo "<td>" . $issue['nameBook'] . "</td>";
                                                                                echo "<td>" . $issue['dateissue'] . "</td>";
                                                                                echo " <td>
                                                                                            <button class='btn btn-primary zmdi zmdi-edit' type='button'/>
                                                                                            <button class='btn btn-danger zmdi zmdi-delete' type='button'/>
                                                                                        </td>";
                                                                            }
                                                                        }
                                                                    ?>
<!---->
<!--                                                                    <td>Mark</td>-->
<!--                                                                    <td>Otto</td>-->
<!--                                                                    <td>john</td>-->
<!--                                                                    <td>2</td>-->
<!--                                                                    <td>1/1/2021</td>-->
<!--                                                                    <td>-->
<!--                                                                        <button class="btn btn-primary zmdi zmdi-edit" type="button"></button>-->
<!--                                                                        <button class="btn btn-danger zmdi zmdi-delete" type="button"></button>-->
<!--                                                                    </td>-->
                                                                </tr>

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
                                    </div>
<!--                                End table Isuue-->

<!--                                    start table return-->

                                    <div class="tab-pane" id="return">
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
                                                                <div class="form-row col-md-2">
                                                                    <select name="category" class="form-control" required>
                                                                        <option value="sid">- - ID Thành viên - -</option>
                                                                        <option value="bid" selected="selected">- - ID Sách - -</option>

                                                                    </select>
                                                                </div>

                                                                <div class="form-row col-md" style="margin-bottom: 3%;">
                                                                    <form class="form-row col-md">
                                                                        <div class="col-md">
                                                                            <input class="form-control" type="search" placeholder="Nhập ID Thành Viên Hoặc ID Sách...">
                                                                        </div>
                                                                        <div class="col-md-0">
                                                                            <button class="btn btn-light" type="submit">Tìm kiếm</button>
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
                                                                    <th scope="col">Admin ID</th>
                                                                    <th scope="col">Student ID</th>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Book ID</th>
                                                                    <th scope="col">Date return</th>
                                                                    <th scope="col">Setting</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>john</td>
                                                                    <td>2</td>
                                                                    <td>1/1/2022</td>
                                                                    <td>
                                                                        <button class="btn btn-primary zmdi zmdi-edit" type="button"></button>
                                                                        <button class="btn btn-danger zmdi zmdi-delete" type="button"></button>
                                                                    </td>
                                                                </tr>

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
                                    </div>

<!--                                    end table isuue-->


                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <!-- End container-fluid-->
        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <?php include "masterpageAdmin/footer.php" ?>
        <!--End footer-->

    </div><!--End wrapper-->


</body>
</html>
