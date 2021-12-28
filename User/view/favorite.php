<!DOCTYPE html>
<html lang="en">
<?php include "masterpage/header.php" ?>

<body class="bg-theme bg-theme2">
    <!--Start topbar header-->
    <?php include "masterpage/menutop.php" ?>
    <!--End topbar header-->

    <div id="wrapper" class="toggled">

        <div class="content-wrapper">

            <div class="container-fluid">

                <div class="col-lg-12">
                    <div class="container card">

                        <div class="card-body row d-flex justify-content-around" id="favorite">
                            <?php
                            foreach ($listBook as $book) {
                                $book['name'] = strlen($book['name']) > 30 ? substr($book['name'], 0, 30) . "..." : $book['name'];
                                echo '<div class="card col-md-auto" id="fav_item">';
                                if($book['image']!=null){
                                    echo '<img class="card-img-top" width="100px" height="250px" src="../../Admin/image/'.$book['image'].'">';
                                }else{
                                    echo '<img class="card-img-top" width="100px" height="250px" src="https://via.placeholder.com/300x400">';
                                }
                                echo '<div class="card-body md-auto" style="margin-top: -25px">';
                                echo '<h5 class="card-title my-4"><a href=?book=' . $book['id_book'] . '>' . $book['name'] . '</a></h5><hr/>';
                                echo '<div class="d-flex justify-content-center">';
                                echo '<button class="btn btn-danger rounded fa fa-trash" onClick="delFavorite2();" id="btnDelFav" value="' . $book['id'] . '"></button>';
                                echo '</div></div></div>';
                            }
                            ?>
                        </div>

                    </div>
                </div>

            </div>

        </div>





        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <?php include "masterpage/footer.php" ?>
        <!--End footer-->
    </div>
</body>

</html>