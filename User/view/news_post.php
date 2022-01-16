<!DOCTYPE html>
<html lang="en">
<?php include_once __DIR__ . "/masterpage/header.php" ?>

<body class="bg-theme bg-theme2">
    <!--Topbar header-->
    <?php include_once __DIR__ . "/masterpage/menutop.php" ?>
    <div id="wrapper" class="toggled">
        <div class="content-wrapper">
            <div class="container-fluid row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <!-- Breadcrumb -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <nav aria-label="">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="?page=home"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a></li>
                                                <li class="breadcrumb-item"><a href="?page=news">Tin tức</a></li>
                                                <li class="breadcrumb-item active" aria-current="page"><?php echo $news['title'] ?></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Main Content -->
                            <!-- ##### Post Details Area Start ##### -->
                            <section class="container">
                                <div class="card-img col-12 ">
                                    <?php
                                    if ($news['image'] != null) {
                                        echo '<img class="img-fluid " src="../../Admin/image/' . $news['image'] . '" alt="news-image">';
                                    } else {
                                        echo '<img class="img-fluid " src="https://via.placeholder.com/1080x480" alt="news-image">';
                                    }
                                    ?>
                                </div>
                                <div class="row justify-content-center">
                                    <!-- Post Details Content Area -->
                                    <div class="col-lg-12 col-xl-10">
                                        <!-- Post Content -->
                                        <a href="javascript:void();" class="badge badge-success"><?php echo $news['nameCategory'] ?></a>
                                        <a href="single-post.html">
                                            <h2><?php echo $news['title'] ?></h2>
                                        </a>

                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="">
                                                <a href="#">Đăng bởi <?php echo $news['nameAdmin'] ?></a>
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                                <a href="#"><?php echo $news['datenews'] ?></a>
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <?php echo $news['description'] ?>
                                        <!-- Related Post Area -->
                                        <hr>
                                    </div>
                                </div>
                        </div>
                        </section>
                        <!-- ##### Post Details Area End ##### -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-body"> 
                            <!-- CATEGORY -->
                            <aside>
                                <h4>Danh mục</h4>
                                <ul>
                                <?php
                                    foreach ($listNewsCa as $item){
                                    echo '<li>'
                                        . '<a href="#" class="d-flex">'
                                        . '<p>'.$item['name'].'</p>'
                                        . '<p>('.$item['qty'].')</p>'
                                        . '</a>'
                                        . '</li>';
                                    }
                                    ?>
                                </ul>
                            </aside>
                            <!-- CATEGORY -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--Footer-->
        <?php include_once __DIR__ . "/masterpage/footer.php" ?>
    </div>
    <!--End wrapper-->
</body>

</html>