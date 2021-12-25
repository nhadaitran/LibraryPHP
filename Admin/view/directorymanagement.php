<!DOCTYPE html>
<html lang="en">
    <?php include "masterpageAdmin/header.php" ?>
    <body class="bg-theme bg-theme2">
        <!-- start loader -->
        <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
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
                                <?php include "masterpageAdmin/managedirectory.php" ?>

                                <?php include "masterpageAdmin/managepost.php" ?>


                                </div>
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
