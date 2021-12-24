
<div class="tab-pane" id="info">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#" class="row">
                        <div class="form-group col-lg-5">
                            <label for="input-6">Họ và tên</label>
                            <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input-7"> Địa chỉ Email</label>
                            <input type="text" class="form-control form-control-rounded" id="input-7" placeholder="Enter Your Email Address">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="input-8">Số điện thoại</label>
                            <input type="text" class="form-control form-control-rounded" id="input-8" placeholder="Enter Your Mobile Number">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input-9">Mật khẩu cũ</label>
                            <input type="text" class="form-control form-control-rounded" id="input-9" placeholder="Enter Old Password">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input-9">Mật khẩu mới</label>
                            <input type="text" class="form-control form-control-rounded" id="input-9" placeholder="Enter New Password">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input-10">Nhập lại mật khẩu mới</label>
                            <input type="text" class="form-control form-control-rounded" id="input-10" placeholder="Confirm New Password">
                        </div>
                        <div class="form-group col-lg-6">
                            <select name="category" class="form-control form-control-rounded" required>
                                <option value="sem" selected="selected" disabled>- - Sinh viên năm ? - -</option>
                                <option value="1">Sinh viên năm nhất</option>
                                <option value="2">Sinh viên năm hai</option>
                                <option value="3">Sinh viên năm ba</option>
                                <option value="4">Sinh viên năm tư</option>
                                <option value="5">Sinh viên năm năm</option>
                                <option value="6">Sinh viên năm sáu</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <select name="category" class="form-control form-control-rounded" required>
                                <option value="sem" selected="selected" disabled>- - Khoa ? - -</option>
                                <option value="cntt">Công nghệ thông tin</option>
                                <option value="ddt">Điện - điện tử</option>
                                <option value="dvt">Điện - viễn thông</option>
                                <option value="xd">Xây dựng</option>
                                <option value="cntp">Công nghệ thực phẩm</option>
                                <option value="qtkd">Quản trị kinh doanh</option>
                                <option value="design">Design</option>
                            </select>
                        </div>
                        <div class="btn-group mr-2 float-right" role="group" aria-label="First group">
                            <input type="submit" class="btn btn-light btn-round px-5 ml-3 " value="Cập Nhật" id="applyBtn" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- TOAST -->
    <?php include "toast_confirm.php" ?>
    <!-- TOAST END -->
</div>

