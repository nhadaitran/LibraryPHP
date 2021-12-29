<div class="tab-pane" id="info">
    <div class="container rounded card mt-5">
        <div class="row">
            <?php
            echo '
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" src="https://via.placeholder.com/110x110" alt="user avatar" width="90">
                    <span class="font-weight-bold" id="_username">' . $user['name'] . '</span>
                    <span class="text-50" id="_useremail">' . $user['email'] . '</span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="text-right">Chỉnh Sửa Thông Tin</h6>
                    </div>
                    <form method="post" onSubmit="return updateInfo();">
                    <div class="row mt-2">
                        <div class="col-md-12 form-group"><input type="text" id="username" class="form-control" value="' . $user['username'] . '" disabled></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 form-group" id="name-group"><input type="text" id="name" class="form-control" placeholder="Họ và Tên: ' . $user['name'] . '" value=""></div>
                        <div class="col-md-6 form-group" id="email-group"><input type="email" id="email" class="form-control" placeholder="Email của bạn: ' . $user['email'] . '" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><a class="" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Thay Đổi Mật Khẩu </a></div>
                        </div>
                        <div id="collapseOne" class="collapse hide row mt-3" aria-labelledby="headingOne" data-parent="#accordionOne ">                            
                            <div class="col-md-6 form-group" id="newpass-group"><input type="password" id="new_password" class="form-control" placeholder="Mật khẩu mới" value=""></div>
                            <div class="col-md-6 form-group" id="confirmpass-group"><input type="password" id="confirm_password" class="form-control" placeholder="Xác nhận mật khẩu mới" value=""></div>                            
                        </div>
                        <div class="row mt-5 d-flex justify-content-end">
                        <div class="col-md-6 form-group"><button class="btn btn-primary profile-button" type="submit">Cập Nhật</button></div>
                        <div class="col-md-6 form-group" id="oldpass-group"><input type="password" id="old_password" class="form-control" placeholder="Xác nhận mật khẩu hiện tại" value=""></div>
                    </div>
                    <form>
                </div>
            </div>
        </div>';
            ?>
        </div>
    </div>
    <!-- TOAST -->
    <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
        <div id="liveToastUpdateInfo" class="toast hide bg-transparent" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
            <div class="toast-header">
                <img src="https://www.svgrepo.com/show/63321/avatar.svg" alt="User Avatar" style="width:10%">
                <strong class="mr-auto">Thủ Thư</strong>
                <small>vừa mới đây</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <p>Thông tin của bạn đã được cập nhật !</p>
                <p>Reload lại trang để cập nhật thông tin !</p>
            </div>
        </div>
    </div>
    <!-- TOAST END -->