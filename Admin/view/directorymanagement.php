<!DOCTYPE html>
<html lang="en">
<?php include "masterpageAdmin/header.php" ?>

<body class="bg-theme bg-theme2">
    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

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
                                    <a href="javascript:void();" data-target="#directory" data-toggle="pill" class="nav-link active"><i class="zmdi zmdi-bookmark-outline"></i><span class="hidden-xs">Loại danh mục</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#post" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-storage"></i><span class="hidden-xs">Bài viết</span></a>
                                </li>

                            </ul>
                            <div class="tab-content p-3">

                                <!--start table new category-->
                                <div class="tab-pane active" id="directory">
                                    <div class="container-fluid">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="accordion" id="accordionOne">
                                                        <div class="col-lg d-flex justify-content-center" style="margin:auto">

                                                            <div class="form-row col-md-2">
                                                                <select name="category" class="form-control" required>
                                                                    <option value="id" selected="selected">- - ID - -</option>
                                                                    <option value="name">- - Name - -</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-row col-md" style="margin-bottom: 3%;">
                                                                <form class="form-row col-md">
                                                                    <div class="col-md">
                                                                        <input class="form-control" type="search" placeholder="Nhập id sách hoặc name">
                                                                    </div>
                                                                    <div class="col-md-0">
                                                                        <button class="btn btn-light" type="submit">Tìm kiếm</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="table table-responsive">
                                                        <table>
                                                            <tr>
                                                                <form id="" action="ControllerNewsCategories.php" method="POST" class="row">
                                                                    <td>
                                                                        <label>Tên danh mục:</label>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="nameCategory" class="form-control form-control-rounded" id="input-6">
                                                                    </td>
                                                                    <td>
                                                                        <button name="action" value="saveCategory" class="btn btn-primary type=" submit">Thêm</button>
                                                                    </td>
                                                                </form>
                                                            </tr>
                                                        </table>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">id</th>
                                                                    <th scope="col">Name Category</th>
                                                                    <th scope="col">Setting</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php
                                                                if (!empty($data['newCategoriesList'])) {
                                                                    foreach ($data['newCategoriesList'] as $newCategories) {
                                                                        $id = $newCategories['id'];
                                                                        echo "<tr>"
                                                                            . '<th scope="row">' . $newCategories['id'] . '</th>'
                                                                            . "<td>" . $newCategories['name'] . "</td>"
                                                                            . "<td>"
                                                                            ."<form id='' action='ControllerNewsCategories.php' method='POST' class='row'>"
                                                                            .'<input type="text" hidden name="id" value="'.$id.'">'
                                                                            . '<button name="action" value="delete" class="btn btn-danger zmdi zmdi-delete" type="submit"/>'
                                                                            .'</form>'
                                                                            . '</td>'
                                                                            . '</tr>';
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
                                    <!--/row-->
                                </div>
                                <!--End table new category-->

                                <!-- start table news-->
                                <div class="tab-pane" id="post">
                                    <div class="container-fluid">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="accordion" id="accordionOne">
                                                        <div class="col-lg d-flex justify-content-center" style="margin:auto">

                                                            <div class="form-row col-md-2">
                                                                <select name="category" class="form-control" required>
                                                                    <option value="id" selected="selected">- - ID - -</option>
                                                                    <option value="name">- - Tiêu đề - -</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-row col-md" style="margin-bottom: 3%;">
                                                                <form class="form-row col-md">
                                                                    <div class="col-md">
                                                                        <input class="form-control" type="search" placeholder="Nhập id bài viết hoặc tiêu đề">
                                                                    </div>
                                                                    <div class="col-md-0">
                                                                        <button class="btn btn-light" type="submit">Tìm kiếm</button>
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
                                                                    <th scope="col">Title</th>
                                                                    <th scope="col">Date Add New</th>
                                                                    <th scope="col">Name Admin</th>
                                                                    <th scope="col">Decription</th>
                                                                    <th scope="col">Category New</th>
                                                                    <th scope="col">Setting</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                if (!empty($data['newList'])) {
                                                                    foreach ($data['newList'] as $new) {
                                                                        echo "<tr>"
                                                                            . '<th scope="row">' . $new['id'] . '</th>'
                                                                            . '<td>' . $new['title'] . '</td>'
                                                                            . '<td>' . $new['datenews'] . '</td>'
                                                                            . '<td>' . $new['fullname'] . '</td>'
                                                                            . '<td>' . $new['description'] . '</td>'
                                                                            . '<td>' . $new['name'] . '</td>'
                                                                            . '<td>'
                                                                            . '<button class="btn btn-primary zmdi zmdi-edit" type="button"/>'
                                                                            . '<button class="btn btn-danger zmdi zmdi-delete" type="button"/>'
                                                                            . '</td>'
                                                                            . '</tr>';
                                                                    }
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <!-- end table news-->

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
                                    <!--/row-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <?php include "masterpageAdmin/footer.php" ?>
    <!--End footer-->


    </div>
    <!--End wrapper-->


</body>

</html>