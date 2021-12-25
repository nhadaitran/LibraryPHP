<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Book Library</title>
    <!-- loader-->
    <link href="User/view/assets/css/pace.min.css" rel="stylesheet"/>
    <script src="User/view/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="User/view/assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../User/view/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="User/view/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="User/view/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="User/view/assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="User/view/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="User/view/assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="User/view/assets/css/app-style.css" rel="stylesheet"/>
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
                    <a class="nav-link fa fa-user-circle" href="User/view/login.php">
                        Đăng nhập
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fa fa-plus-circle" href="User/view/register.php">
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
                                <select name="category" class="form-control" required>
                                    <option value="cid" selected="selected" disabled>- - Danh Mục - -</option>
                                    <option value="All">- - All - -</option>
                                    <option value="Literary Fiction">Literary Fiction</option>
                                    <option value="Mystery">Mystery</option>
                                    <option value="Thriller">Thriller</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Historical">Historical</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Western">Western</option>
                                    <option value="Science Fiction">Science Fiction</option>
                                    <option value="Fantasy">Fantasy</option>
                                    <option value="Magical Realism">Magical Realism</option>
                                    <option value="Realist Literature">Realist Literature</option>
                                </select>
                            </div>

                            <div class="form-row col-md" >
                                <form class="form-row col-md">
                                    <div class="col-md">
                                        <input class="form-control" type="search" placeholder="Tìm kiếm bằng tiêu đề sách hoặc tác giả...">
                                    </div>
                                    <div class="col-md-0">
                                        <button class="btn btn-light" type="submit">Tìm Kiếm</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Mã sách</th>
                                <th scope="col">Tiêu đề sách</th>
                                <th scope="col">Tác giả</th>
                                <th scope="col">Trạng Thái</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr role="row">
                                <td>11</td>
                                <td><a href="User/view/bookNoLogin.php">Software Engineering</a></td>
                                <td>ABCDEFF</td>
                                <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>
                            </tr>
                            <tr role="row">
                                <td>49</td>
                                <td><a href="User/view/bookNoLogin.php">Python Cookbook</a></td>
                                <td>ABCDEFF</td>
                                <td><button class="btn btn-success btn-sm" disabled="disable">available</button></td>
                            </tr>
                            <tr role="row">
                                <td>1</td>
                                <td><a href="User/view/bookNoLogin.php">Machinery Handbook</a></td>
                                <td>ABCDEFF</td>
                                <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>
                            </tr>
                            <tr role="row">
                                <td>20</td>
                                <td><a href="User/view/bookNoLogin.php">Effective C++</a></td>
                                <td>Scott Meyers</td>
                                <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>
                            </tr>
                            <tr role="row">
                                <td>220</td>
                                <td><a href="User/view/bookNoLogin.php">Java 2</a></td>
                                <td>Herbert </td>
                                <td><button class="btn btn-success btn-sm" disabled="disable">available</button></td>
                            </tr>
                            <tr role="row">
                                <td>35</td>
                                <td><a href="User/view/bookNoLogin.php">A Brief History of Time</a></td>
                                <td>Stephen Hawkings</td>
                                <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>
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
</div>
<!--End wrapper-->



</body>

</html>