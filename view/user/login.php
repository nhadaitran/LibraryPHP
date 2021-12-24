<!DOCTYPE html>
<html lang="en">
    <?php include "masterpage/header.php" ?>
    <body class="bg-theme bg-theme2">

        <!-- start loader -->
        <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
        <!-- end loader -->

        <!-- Start wrapper-->
        <div id="wrapper">
            <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
            <div class="card card-authentication1 mx-auto my-5">
                <div class="card-body">
                    <div class="card-content p-2">
                        <div class="text-center">
                            <img src="../assets/images/logo-icon.png" alt="logo icon">
                        </div>
                        <div class="card-title text-uppercase text-center py-3">Đăng Nhập</div>
                        <form method="post" action="home.php">
                            <div class="form-group">
                                <label for="exampleInputUsername" class="sr-only">Username</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Username" required="required">
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword" class="sr-only">Password</label>
                                <div class="position-relative has-icon-right">
                                    <input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password" required="required">
                                    <div class="form-control-position">
                                        <i class="icon-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <div class="icheck-material-white">
                                        <input type="checkbox" id="user-checkbox" checked="" />
                                        <label for="user-checkbox">Ghi nhớ tài khoản</label>
                                    </div>
                                </div>
                                <div class="form-group col-6 text-right">
                                    <a class="btn btn-link" href="reset-password.php">Reset Password</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-light btn-block">Đăng Nhập</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-center py-3">
                    <p class="text-warning mb-0">Bạn chưa có tài khoản? <a href="register.php"> Đăng Ký</a></p>
                </div>
                <div class="card-footer text-center py-3">
                    <a class="btn btn-link" href="../admin/index.php"> Admin Here</a>
                </div>
                <div class="card-footer text-center py-3">
                    <a class="btn btn-link" href="../index.php"> Quay lại</a>
                </div>
            </div>


        </div><!--wrapper-->

    </body>
</html>
</html>
