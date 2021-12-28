<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form id="formSaveBook" action="../Controller/ControllerBook.php" method="post" class="row" enctype="multipart/form-data">
                    <div class="form-group col-lg-4">
                        <label for="input-6">Tên sách</label>
                        <input type="text" name="nameBook" class="form-control form-control-rounded" id="input-6">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="input-7"> Tác giả</label>
                        <input type="text" name="nameAuthor"  class="form-control form-control-rounded" id="input-7">
                    </div>

                    <div class="form-group col-lg-4">
                        <label for="input-8">Thể loại</label>
                        <select name="category" class="form-control form-control-rounded">
                            <?php
                            if(!empty($listCategory)){
                                foreach ($listCategory as $category){
                                    echo  '<option value="'.$category['id'].'">'.'- - '.$category['name']. ' - -'.'</option>';
                                }
                            }
                            ?>
                        </select>

                    </div>

                    <div class="form-group col-lg-4">
                        <label for="exampleFormControlFile1">Chọn ảnh</label>
                        <input name="fileImage" type="file" class="form-control-file" accept="image/png" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="input-10">Nội dung</label><br/>
                        <textarea  name="decription" rows="4" cols="50" ></textarea>
                    </div>
                    <div class="form-group col-lg-12 ">
                        <input type="hidden" name="action" value="saveBook" />
                        <button class="btn btn-primary col-lg-12 " type="submit">Thêm sách</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--End Row-->
</div>
