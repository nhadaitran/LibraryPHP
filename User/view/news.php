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
                            <?php
                            foreach ($listNews as $News) {
                                $News['description'] = strlen($News['description']) > 400 ? substr($News['description'], 0, 400) . "..." : $News['description'];
                                echo '<article class="row">'
                                    . '<div class="card-img col-md-3 ">';
                                if ($News['image'] != null) {
                                    echo '<img class="img-fluid " src="../../Admin/image/' . $News['image'] . '" alt="news-image">';
                                } else {
                                    echo '<img class="img-fluid " src="https://via.placeholder.com/200x2000" alt="news-image">';
                                }
                                echo '</div>'
                                    . '<div class="card-body col-md-9">'
                                    . '<a class="d-inline-block" href="news_post.php">'
                                    . '<h4><a href=?news=' . $News['id'] . '>' . $News["title"] . '</a></h4>'
                                    . '</a>'
                                    . '<p>' . $News['description'] . '</p>'
                                    . '<ul>'
                                    . '<li>'
                                    . '<a href="javascript:void();" class="badge badge-success">' . $News['nameCategory'] . '</a>'
                                    . '</li>'
                                    . '<li>'
                                    . '<a href="#"><i class="fa fa-user"></i>&#9 ' . $News["nameAdmin"] . ' | ' . $News["datenews"] . '</a>'
                                    . '</li>'
                                    . '</ul>'
                                    . '</div>'
                                    . '</article>'
                                    . '<hr />';
                            }
                            ?>
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