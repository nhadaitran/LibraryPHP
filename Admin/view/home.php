
<!DOCTYPE html>
<html lang="en">
    <?php include_once __DIR__."/masterpageAdmin/header.php" ?>
    <body class="bg-theme bg-theme2">
                            <!-- Start wrapper-->
        <div id="wrapper">
                            <!--Start sidebar-wrapper-->
            <?php include_once __DIR__."/masterpageAdmin/menuleft.php" ?>
                            <!--End sidebar-wrapper-->

                            <!--Start topbar header-->
            <?php include_once __DIR__."/masterpageAdmin/menutop.php" ?>
                            <!--End topbar header-->

            <div class="content-wrapper">

                <!-- start container-fluid-->
                <div class="container-fluid">

                    <!--Start Dashboard Content-->

                    <div class="card mt-3">
                        <div class="card-content">
                            <div class="row row-group m-0">
                                <div class="col-12 col-lg-6 col-xl-3 border-light">
                                    <div class="card-body">
                                        <h5 class="text-white mb-0"> <?php echo $data['countBook']; ?> <span class="float-right"><i class="fa fa-book"></i></span></h5>
                                        <div class="progress my-3" style="height:3px;">
                                            <div class="progress-bar" style="width:55%"></div>
                                        </div>
                                        <p class="mb-0 text-white small-font">Số lượng sách <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-3 border-light">
                                    <div class="card-body">
                                        <h5 class="text-white mb-0"><?php echo $data['countUser']; ?> <span class="float-right"><i class="fa fa-user"></i></span></h5>
                                        <div class="progress my-3" style="height:3px;">
                                            <div class="progress-bar" style="width:55%"></div>
                                        </div>
                                        <p class="mb-0 text-white small-font">Số lượng sinh viên <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-3 border-light">
                                    <div class="card-body">
                                        <h5 class="text-white mb-0"> <?php echo $data['countIssue'];?> <span class="float-right"><i class="fa fa-mail-forward"></i></span></h5>
                                        <div class="progress my-3" style="height:3px;">
                                            <div class="progress-bar" style="width:55%"></div>
                                        </div>
                                        <p class="mb-0 text-white small-font">Số lượng mượn hôm nay <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-3 border-light">
                                    <div class="card-body">
                                        <h5 class="text-white mb-0"><?php echo $data['countReturn'] ;?> <span class="float-right"><i class="fa fa-mail-reply"></i></span></h5>
                                        <div class="progress my-3" style="height:3px;">
                                            <div class="progress-bar" style="width:55%"></div>
                                        </div>
                                        <p class="mb-0 text-white small-font">Số lượng trả hôm nay <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--End Dashboard Content-->

                    <!--Start table report-->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#book" data-toggle="pill" class="nav-link  active"><i class="zmdi zmdi-account-calendar"></i><span class="hidden-xs">Report</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content p-3">
                                    <div class="tab-pane active" id="book">
                                        <?php include_once "masterpageAdmin/tableReport.php" ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End table report-->

                </div>
                <!-- End container-fluid-->

            </div>
            <!--End content-wrapper-->




                            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
                            <!--End Back To Top Button-->

                            <!--Start footer-->
            <?php include_once __DIR__."/masterpageAdmin/footer.php" ?>
                                <!--End footer-->

        </div>
                            <!--End wrapper-->

    </body>
</html>
