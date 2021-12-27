<!DOCTYPE html>
<html lang="en">
<?php include_once __DIR__ . "/masterpage/header.php" ?>

<body class="bg-theme bg-theme2">
    <!-- Start wrapper-->
    <div id="wrapper" class="toggled">
        <!--Start topbar header-->
        <?php include_once __DIR__ . "/masterpage/menutop.php" ?>
        <!--End topbar header-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active"><i class="zmdi zmdi-info"></i> <span class="hidden-xs">Thông tin sách</span></a>
                            </li>
                        </ul>
                        <div class="tab-content p-3">

                            <!--BOOK INFO-->
                            <div class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3 class="">
                                            <?php
                                            echo $book['bname'];
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <h6>
                                            <?php
                                            echo $book['author'];
                                            ?>
                                        </h6>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">
                                            <?php
                                            echo $book['cname'];
                                            ?>
                                        </a>
                                        <hr>
                                        <span class="badge badge-primary"><i class="fa fa-user"></i> 120 Followers</span>
                                        <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                                        <hr>
                                        <h6>Mô tả</h6>
                                        <p>
                                            <?php
                                            echo $book['description'];
                                            ?>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="img-fluid " src="https://via.placeholder.com/400x500" alt="book-image">

                                    </div>
                                </div>
                                <!--/row-->
                                <a class="btn btn-light fa fa-long-arrow-left" href="../Controller/ControllerPage.php?page=home"></a>
                                <?php
                                if ($fav == null) {
                                    echo '<a class="btn btn-success fa fa-heart-o" href="../Controller/ControllerBook.php?book=fav&id=' . $book['id'] . '"></a>';
                                } else {
                                    echo '<a class="btn btn-danger fa fa-heart-o" href="../Controller/ControllerBook.php?book=defav&id=' . $book['id'] . '&favid=' . $fav['id'] . '"></a>';
                                }
                                if ($book['status'] == 0) {
                                    echo '<a class="btn btn-success fa fa-check" href="../Controller/ControllerBook.php?book=issue&id=' . $book['id'] . '"></a>';
                                }
                                ?>
                            </div>

                            <!--BOOK INFO-->
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
        <?php include_once __DIR__ . "/masterpage/footer.php" ?>
        <!--End footer-->


    </div>
    <!--End wrapper-->


</body>

</html>