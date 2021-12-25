
<div class="tab-pane active" id="directory">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordionOne">
                        <div class="col-lg d-flex justify-content-center" style="margin:auto">
                            
                            <div class="form-row col-md-2">
                                <select name="category" class="form-control" required>
                                    <option value="id" selected="selected">- - ID - -</option>
                                    <option value="name">- - Name - -</option>
                                </select>
                            </div>

                            <div class="form-row col-md" style="margin-bottom: 3%;">
                                <form class="form-row col-md">
                                    <div class="col-md">
                                        <input class="form-control" type="search" placeholder="Nhập id sách hoặc name">
                                    </div>
                                    <div class="col-md-0">
                                        <button class="btn btn-light" type="submit">Tìm kiếm</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table table-responsive">
                        <table class="table">
                            <thead >
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Java</td>
                                    
                                    <td>
                                        <button class="btn btn-primary zmdi zmdi-edit" type="button"></button>
                                        <button class="btn btn-danger zmdi zmdi-delete" type="button"></button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>


                    <nav class="mt-3">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a> </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
</div>