
<div class="tab-pane" id="manage"><div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg d-flex justify-content-start">
                        <div class="form-row col-md-2">
                            <select name="category" class="form-control" required>
                                <option value="" selected="selected" disabled>- - Danh Mục - -</option>
                                <option value="issue">Đang mượn</option>
                                <option value="return">Đã trả</option>
                                <option value="favorite">Yêu thích</option>
                            </select>
                        </div>
                    </div> 
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>                      
                                <th scope="col">Ngày mượn</th>
                                <th scope="col">Tiêu đề sách</th>
                                <th scope="col">Tác giả</th>
                                <th scope="col">Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row">
                                <td>11-02-2019</td>
                                <td><a href="book.php">Software Engineering</a></td>
                                <td>ABCDEFF</td>
                                <td><button class="btn btn-success btn-sm" disabled="disable">returned</button></td>
                            </tr>
                            <tr role="row">
                                <td>4-3-2019</td>
                                <td><a href="book.php">Python Cookbook</a></td>              
                                <td>ABCDEFF</td>
                                <td><button class="btn btn-danger btn-sm" disabled="disable">not return</button></td>
                            </tr>
                            <tr role="row">
                                <td>12-12-2019</td>
                                <td><a href="book.php">Machinery Handbook</a></td>     
                                <td>ABCDEFF</td>       
                                <td><button class="btn btn-success btn-sm" disabled="disable">returned</button></td>             
                            </tr>
                            <tr role="row">
                                <td>2-1-2020</td>
                                <td><a href="book.php">Effective C++</a></td>          
                                <td>Scott Meyers</td>       
                                <td><button class="btn btn-success btn-sm" disabled="disable">returned</button></td>                 
                            </tr>
                            <tr role="row">
                                <td>2-2-2020</td>
                                <td><a href="book.php">Java 2</a></td>                                 
                                <td>Herbert </td>
                                <td><button class="btn btn-danger btn-sm" disabled="disable">not return</button></td>
                            </tr>
                            <tr role="row">
                                <td>3-5-2020</td>
                                <td><a href="book.php">A Brief History of Time</a></td>                  
                                <td>Stephen Hawkings</td>                
                                <td><button class="btn btn-success btn-sm" disabled="disable">returned</button></td>        
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