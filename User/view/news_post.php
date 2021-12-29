<!DOCTYPE html>
<html lang="en">
<?php include_once __DIR__."/masterpage/header.php" ?>

<body class="bg-theme bg-theme2">
    <!--Topbar header-->
    <?php include_once __DIR__."/masterpage/menutop.php" ?>
    <div id="wrapper" class="toggled">
        <div class="content-wrapper">
            <div class="container-fluid row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <?php include_once __DIR__."/masterpage/archive/post-archive.php" ?>
                        </div>
                    </div>                
                <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-body">
                            <?php include_once __DIR__."/masterpage/archive/archive-right.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--Footer-->
        <?php include_once __DIR__."/masterpage/footer.php" ?>
    </div>
    <!--End wrapper-->
</body>

</html>