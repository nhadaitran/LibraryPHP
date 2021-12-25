
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
                <div class="container-fluid">

                    <!--Start Dashboard Content-->

                    <div class="card mt-3">
                        <div class="card-content">
                            <div class="row row-group m-0">
                                <div class="col-12 col-lg-6 col-xl-3 border-light">
                                    <div class="card-body">
                                        <h5 class="text-white mb-0"> <?php echo $countBook; ?> <span class="float-right"><i class="fa fa-book"></i></span></h5>
                                        <div class="progress my-3" style="height:3px;">
                                            <div class="progress-bar" style="width:55%"></div>
                                        </div>
                                        <p class="mb-0 text-white small-font">Số lượng sách <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-3 border-light">
                                    <div class="card-body">
                                        <h5 class="text-white mb-0"><?php echo $countUser; ?> <span class="float-right"><i class="fa fa-user"></i></span></h5>
                                        <div class="progress my-3" style="height:3px;">
                                            <div class="progress-bar" style="width:55%"></div>
                                        </div>
                                        <p class="mb-0 text-white small-font">Số lượng sinh viên <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-3 border-light">
                                    <div class="card-body">
                                        <h5 class="text-white mb-0"> <?php echo $countIssue; ?> <span class="float-right"><i class="fa fa-mail-forward"></i></span></h5>
                                        <div class="progress my-3" style="height:3px;">
                                            <div class="progress-bar" style="width:55%"></div>
                                        </div>
                                        <p class="mb-0 text-white small-font">Số lượng mượn hôm nay <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-3 border-light">
                                    <div class="card-body">
                                        <h5 class="text-white mb-0"><?php echo $countReturn;?> <span class="float-right"><i class="fa fa-mail-reply"></i></span></h5>
                                        <div class="progress my-3" style="height:3px;">
                                            <div class="progress-bar" style="width:55%"></div>
                                        </div>
                                        <p class="mb-0 text-white small-font">Số lượng trả hôm nay <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Row-->

                    <!--End Dashboard Content-->
                </div>
                <!-- End container-fluid-->

            </div><!--End content-wrapper-->
            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
            <!--End Back To Top Button-->

            <!--Start footer-->
            <?php include_once __DIR__."/masterpageAdmin/footer.php" ?>
            <!--End footer-->

        </div><!--End wrapper-->

    </body>
</html>
