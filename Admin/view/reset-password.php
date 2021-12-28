
<!DOCTYPE html>
<html lang="en">
    <?php include "masterpageAdmin/header.php" ?>
    <body class="bg-theme bg-theme2">

        <!-- Start wrapper-->
        <div id="wrapper">

            <div class="height-100v d-flex align-items-center justify-content-center">
                <div class="card card-authentication1 mb-0">
                    <div class="card-body">
                        <div class="card-content p-2">
                            <div class="card-title text-uppercase pb-2">Reset Password</div>
                            <p class="pb-2">Vui lòng nhập địa chỉ email tài khoản. Một đường link đổi mật khẩu sẽ được gửi đến email đăng kí.</p>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmailAddress" class="">Email Address</label>
                                    <div class="position-relative has-icon-right">
                                        <input type="text" id="exampleInputEmailAddress" class="form-control input-shadow" placeholder="Email Address">
                                        <div class="form-control-position">
                                            <i class="icon-envelope-open"></i>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-light btn-block mt-3">Reset Password</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer text-center py-3">
                        <p class="text-warning mb-0">Quay lại trang <a href="index.php"> Đăng Nhập</a></p>
                    </div>
                </div>
            </div>
        </div><!--wrapper-->
    </body>
</html>
