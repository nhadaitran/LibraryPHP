
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
                                <a href="javascript:void();" data-target="#editBook" data-toggle="pill" class="nav-link active"><i class="zmdi zmdi-edit"></i><span class="hidden-xs">Sách</span></a>
                            </li>
                        </ul>
                        <div class="tab-pane active" id="editBook">
                            <div class="tab-content p-3">
                                <div class="container-fluid">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form id="formSaveBook" action="../Controller/ControllerBook.php" method="post" class="row" enctype="multipart/form-data">
                                                    <input type="hidden" name="idBook" value="<?php echo $book['id']?>">
                                                    <div class="form-group col-lg-4">
                                                        <label for="input-6">Tên sách</label>
                                                        <input type="text" name="nameBook" value="<?php echo $book['name']?>" class="form-control form-control-rounded" id="input-6">
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label for="input-7"> Tác giả</label>
                                                        <input type="text" name="nameAuthor" value="<?php echo $book['author']?>"  class="form-control form-control-rounded" id="input-7">
                                                    </div>

                                                    <div class="form-group col-lg-4">
                                                        <label for="input-8">Thể loại</label>
                                                        <select name="category" class="form-control form-control-rounded">
                                                            <?php
                                                            if(!empty($listCategory)){
                                                                foreach ($listCategory as $category){
                                                                    if($category['id']==$book['id_category']){
                                                                        echo  '<option value="'.$category['id'].'">'.'- - '.$category['name']. ' - -'.'</option>';
                                                                    }
                                                                }
                                                                foreach ($listCategory as $category){
                                                                    if($category['id']!=$book['id_category']){
                                                                        echo  '<option value="'.$category['id'].'">'.'- - '.$category['name']. ' - -'.'</option>';
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </select>

                                                    </div>
                                                    <div class="form-group col-lg-5">
                                                        <label for="input-10">Nội dung</label><br/>
                                                        <textarea value="<?php echo $book['description']?>"  name="decription" rows="4" cols="50" ></textarea>
                                                    </div>

                                                    <div class="form-group col-lg-2">
                                                        <label for="exampleFormControlFile1">Ảnh hiện tại</label>
                                                        <img src="../image/<?php echo $book['image'] ?>" alt="..." class="img-thumbnail">
                                                    </div>
                                                    <div class="form-group col-lg-5">
                                                        <label for="exampleFormControlFile1">Chọn ảnh mới</label>
                                                        <input name="fileImage" type="file" class="form-control-file" accept="image/png" id="exampleFormControlFile1">
                                                    </div>

                                                    <div class="form-group col-lg-12 ">
                                                        <input type="hidden" name="action" value="editBook" />
                                                        <button class="btn btn-primary col-lg-12 " type="submit">Chỉnh sửa</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <!--End Row-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->

            <?php include_once "masterpageAdmin/modal.php" ?>

            <!--end Modal -->
        </div>
    </div>
    <!-- End container-fluid-->

    <!-- Toast-->

    <?php include_once "masterpageAdmin/toast.php" ?>

    <!-- end Toast-->

</div>
<!--End wrapper-->

<!--Start Back To Top Button-->

<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>

<!--End Back To Top Button-->

<!--Start footer-->

<?php include_once "masterpageAdmin/footer.php" ?>

<!--End footer-->

</div>   <!--End wrapper-->
</body>





