
<div class="tab-pane" id="add">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="#" class="row">
                        <div class="form-group col-lg-6">
                            <label for="input-6">Tiêu đề sách</label>
                            <input type="text" class="form-control form-control-rounded" id="input-6">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="input-7"> Tác giả</label>
                            <input type="text" class="form-control form-control-rounded" id="input-7">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="input-8"> Nhà xuất bản</label>
                            <input type="text" class="form-control form-control-rounded" id="input-8">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="input-9">Năm phát hành</label>                                
                            <select name="category" class="form-control form-control-rounded">
                                <option value="" disabled="disabled" selected="selected">Năm phát hành</option>
                                <% for (int i = 2021; i >= 1900; i--) {%>                           
                                <option value="<%=i%>"><%=i%></option>             
                                <% }%>

                            </select>
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="input-10">Số phần</label>
                            <input type="number" class="form-control form-control-rounded" id="input-9">
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
    <!-- End container-fluid-->
</div>