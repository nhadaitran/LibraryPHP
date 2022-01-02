
<!DOCTYPE html>
<html lang="en">
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


                                                    <!--tart table Isuue-->
                                    <div class="tab-pane active" id="issue">

                                            <?php include_once "masterpageAdmin/tableIssue.php"?>

                                    </div>
                                                    <!--End table Isuue-->


                                                    <!--start table return-->

                                    <div class="tab-pane" id="return">

                                            <?php include_once "masterpageAdmin/tableReturn.php"?>

                                    </div>
                                                    <!--end table return-->


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
    <script>
        <?php include_once "js/pageTransaction.js"?>
    </script>
</html>
