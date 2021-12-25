<!DOCTYPE html>
<html lang="en">
<?php include "masterpage/header.php" ?>

<body class="bg-theme bg-theme2">
    <!--Topbar header-->
    <?php include "masterpage/menutop.php" ?>
    <div id="wrapper" class="toggled">
        <div class="content-wrapper">
            <div class="container-fluid row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <?php include "masterpage/archive/main-archive.php" ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <?php include "masterpage/archive/single-archive.php" ?>
                            <?php include "masterpage/archive/single-archive.php" ?>
                            <?php include "masterpage/archive/single-archive.php" ?>
                            <?php include "masterpage/archive/single-archive.php" ?>
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
                <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-body">
                            <?php include "masterpage/archive/archive-right.php" ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--Footer-->
        <?php include "masterpage/footer.php" ?>
    </div>
    <!--End wrapper-->
</body>

</html>