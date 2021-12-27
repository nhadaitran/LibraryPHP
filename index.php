<!DOCTYPE html>
<html lang="en">
<?php
include_once "./User/Model/ModelBook.php";
$modelBook = new ModelBook();
$listBook = $modelBook->getAll();

include_once "./User/Model/ModelCategory.php";
$modelCategory = new ModelCategory();
$listCat = $modelCategory->getAll();

?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Book Library</title>
    <!-- loader-->
    <link href="User/view/assets/css/pace.min.css" rel="stylesheet" />
    <script src="User/view/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="User/view/assets/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="User/view/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="User/view/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="User/view/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="User/view/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="User/view/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="User/view/assets/css/app-style.css" rel="stylesheet" />
</head>

<body class="bg-theme bg-theme2">

    <!-- Start wrapper-->
    <div id="wrapper" class="toggled">
        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <img src="User/view/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                        <h5 class="logo-text">Library</h5>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item">
                        <a class="nav-link fa fa-user-circle" href="./User/Controller/ControllerPage.php?page=login">
                            Đăng nhập
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fa fa-plus-circle" href="./User/Controller/ControllerPage.php?page=register">
                            Đăng ký
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg d-flex justify-content-center">
                                <div class="form-row col-md-2">
                                    <form method="post" action="./User/Controller/ControllerBook.php">
                                        <select name="category" id="category" class="form-control" required onchange="search_cat();">
                                            <option value="0">Danh Mục</option>
                                            <?php
                                            foreach ($listCat as $cat) {
                                                echo '<option value="' . $cat->getId() . '"><a href=?category=' . $cat->getId() . '>' . $cat->getName() . '</a></option>';
                                            }
                                            ?>
                                        </select>
                                    </form>
                                </div>

                                <div class="form-row col-md">
                                    <input class="form-control" type="text" name="search" id="search" placeholder="Tìm kiếm bằng tiêu đề sách..." onkeyup="search_data()">
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
                                    foreach ($listBook as $book) {
                                        echo '<tr role="row">';
                                        echo '<td>' . $book['id'] . '</td>';
                                        echo '<td>' . $book['name'] . '</td>';
                                        echo '<td>' . $book['author'] . '</td>';
                                        if ($book['status'] == 1) {
                                            echo ' <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>';
                                        } else {
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
    </div>

    <!-- End container-fluid-->

    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!-- Bootstrap core JavaScript-->
    <script src="User/view/assets/js/jquery.min.js"></script>
    <script src="User/view/assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="User/view/assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="User/view/assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="User/view/assets/js/app-script.js"></script>
    <script>
        function search_data() {
            var search = jQuery('#search').val();
            jQuery.ajax({
                method: 'post',
                url: 'ControllerSearch.php',
                data: {
                    search: search
                },
                success: function(data) {
                    jQuery('#search_table').html(data);
                }
            });
        }

        function search_cat() {
            var category = jQuery('#category').val();
            jQuery.ajax({
                method: 'post',
                url: 'ControllerBook.php',
                data: {
                    category: category
                },
                success: function(data) {
                    jQuery('#search_table').html(data);
                }
            });
        }
    </script>
    </div>
    <!--End wrapper-->



</body>

</html>