
<div class="tab-pane" id="editmem">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#" class="row">
                        <div class="form-group col-lg-6">
                            <label for="input-6">Họ và tên</label>
                            <input type="text" class="form-control form-control-rounded" id="input-6">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="input-7"> Email</label>
                            <input type="email" class="form-control form-control-rounded" id="input-7">
                        </div>                        
                        <div class="form-group col-lg-6">
                            <label for="input-9">Sinh viên khoá:</label>                                
                            <select name="category" class="form-control form-control-rounded">                                
                                <option value="sem1" selected="selected">Sinh viên năm 1</option>
                                <option value="sem2">Sinh viên năm 2</option>
                                <option value="sem3">Sinh viên năm 3</option>
                                <option value="sem4">Sinh viên năm 4</option>
                                <option value="sem5">Sinh viên năm 5</option>
                                <option value="sem6">Sinh viên năm 6</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="input-10">Sinh viên khoa:</label>                                
                            <select name="category" class="form-control form-control-rounded">                                
                                <option value="cntt" selected="selected">Công nghệ thông tin</option>
                                <option value="qtkd">Quản trị kinh doanh</option>
                                <option value="xd">Xây dựng</option>
                                <option value="ddt">Điện - Điện tử</option>
                                <option value="dvt">Điện - Viễn thông</option>
                                <option value="cntp">Công nghệ thực phẩm</option>
                                <option value="ds">Design</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input-11">Mật khẩu cũ:</label>
                            <input type="password" class="form-control form-control-rounded" id="input-11">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input-12">Mật khẩu mới:</label>
                            <input type="password" class="form-control form-control-rounded" id="input-12">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="input-13">Nhập lại mật khẩu mới:</label>
                            <input type="password" class="form-control form-control-rounded" id="input-13">
                            <!--Khi có dữ liệu tùy vào ấn từ trang nào qua sễ có nút cập nhật hoặc hiển thị-->
                            <div class="btn-group mr-2 mt-2 float-right" role="group" aria-label="First group">
                                <input type="submit" class="btn btn-light btn-round px-2 ml-1 " value="Cập nhật" id="applyBtn" />
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>       
        <!--End Row-->
    </div>
</div>