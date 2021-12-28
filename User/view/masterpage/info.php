<div class="tab-pane" id="info">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    $html = '<form  method="post" onSubmit="return updateInfo();">
                        <div class="form-group col-lg-5">
                            <label for="input-6">Họ và tên</label>
                            <input type="text" class="form-control form-control-rounded" id="username" placeholder="' . $user['name'] . '">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input-7"> Địa chỉ Email</label>
                            <input type="email" class="form-control form-control-rounded" id="useremail" placeholder="' . $user['email'] . '">
                        </div>                        
                        <div class="form-group col-lg-4">
                            <label for="input-9">Mật khẩu mới</label>
                            <input type="password" class="form-control form-control-rounded" id="newpass" placeholder="Enter New Password">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input-10">Nhập lại mật khẩu mới</label>
                            <input type="password" class="form-control form-control-rounded" id="cnewpass" placeholder="Confirm New Password">
                        </div>';
                        
                        $html.='
                        <div class="form-group col-lg-4">
                            <label for="input-9">Mật khẩu hiện tại</label>
                            <input type="password" class="form-control form-control-rounded" id="oldpass" placeholder="Enter Yout Password" required>
                        </div>
                        <div class="btn-group mr-2 float-right" role="group" aria-label="First group">
                            <input type="submit" class="btn btn-light btn-round px-5 ml-3 " value="Cập Nhật" id="applyBtn" />
                        </div>
                    </form>';
                    echo $html
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- TOAST -->
    <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
        <div id="liveToast" class="toast hide bg-transparent" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
            <div class="toast-header">
                <img src="https://www.svgrepo.com/show/63321/avatar.svg" alt="User Avatar" style="width:10%">
                <strong class="mr-auto">Thủ Thư</strong>
                <small>vừa mới đây</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Thông tin của bạn đã được cập nhật
            </div>
        </div>
    </div>
    <!-- TOAST END -->
</div>