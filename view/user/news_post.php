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
                            <?php include "masterpage/archive/post-archive.php" ?>
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