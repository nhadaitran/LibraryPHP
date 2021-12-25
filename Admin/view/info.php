
<!DOCTYPE html>
<html lang="en">
    <?php include "masterpageAdmin/header.php" ?>
    <body class="bg-theme bg-theme2">
        <!-- start loader -->
        <div id="pageloader-overlay" class="visible incoming">
            <div class="loader-wrapper-outer">
                <div class="loader-wrapper-inner">
                    <div class="loader"></div>
                </div>
            </div>
        </div>
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

                    <div class="row mt-3">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Cập Nhật Thông Tin</div>
                                    <hr>
                                    <form action="#" class="row">
                                        <div class="form-group col-lg-5">
                                            <label for="input-6">Họ và tên</label>
                                            <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Nhập họ và tên">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="input-7"> Địa chỉ Email</label>
                                            <input type="text" class="form-control form-control-rounded" id="input-7" placeholder="Nhập địa chỉ email">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="input-8">Số điện thoại</label>
                                            <input type="text" class="form-control form-control-rounded" id="input-8" placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="input-9">Mật khẩu cũ</label>
                                            <input type="text" class="form-control form-control-rounded" id="input-9" placeholder="Nhập mật khẩu cũ">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="input-9">Mật khẩu mới</label>
                                            <input type="text" class="form-control form-control-rounded" id="input-9" placeholder="Nhập mật khẩu mới">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="input-10">Nhập lại mật khẩu mới</label>
                                            <input type="text" class="form-control form-control-rounded" id="input-10" placeholder="Nhập lại mật khẩu mới">
                                            <div class="btn-group mr-2 mt-2 float-right" role="group" aria-label="First group">
                                                <input type="submit" class="btn btn-light btn-round px-5 ml-3 " value="Cập Nhật" id="applyBtn" />
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Row-->
                </div>
                <!-- End container-fluid-->

            </div>
            <!--End content-wrapper-->
            <!-- TOAST -->
            <?php include "masterpageAdmin/toast_confirm.php" ?>
            <!-- TOAST END -->
            <!--Start footer-->
            <?php include "masterpageAdmin/footer.php" ?>
            <!--End footer-->

        </div>
        <!--End wrapper-->

    </body>
