
<!DOCTYPE html>
<html lang="en">
    <?php include "masterpage/header.php" ?>
    <body class="bg-theme bg-theme2">

        <!-- start loader -->
        <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
        <!-- end loader -->

        <!-- Start wrapper-->
        <div id="wrapper">

            <div class="card card-authentication1 mx-auto my-4">
                <div class="card-body">
                    <div class="card-content p-2">
                        <div class="text-center">
                            <img src="assets/images/logo-icon.png" alt="logo icon">
                        </div>
                        <div class="card-title text-uppercase text-center py-3">Đăng Ký</div>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputName" class="sr-only">User Name</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your User Name">
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" id="exampleInputEmailId" class="form-control input-shadow" placeholder="Enter Your Email ID">
                                    <div class="form-control-position">
                                        <i class="icon-envelope-open"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword" class="sr-only">Password</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" id="exampleInputPassword" class="form-control input-shadow" placeholder="Choose Password">
                                    <div class="form-control-position">
                                        <i class="icon-lock"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="icheck-material-white">
                                    <input type="checkbox" id="user-checkbox" checked="" />
                                    <label for="user-checkbox">Tôi đồng ý với các <a href="#"> điều khoản</a></label>
                                </div>
                            </div>

                            <button type="button" class="btn btn-light btn-block waves-effect waves-light">Đăng Ký</button>

                        </form>
                    </div>
                </div>
                <div class="card-footer text-center py-3">
                    <p class="text-warning mb-0">Bạn đã có tài khoản? <a href="login.php"> Đăng Nhập</a></p>
                </div>
                <div class="card-footer text-center py-3">
                    <a class="btn btn-link" href="../../index.php"> Quay lại</a>
                </div>
            </div>

    </body>
</html>
