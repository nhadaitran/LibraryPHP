
<div class="tab-pane active" id="find">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordionOne">
                        <div class="col-lg d-flex justify-content-center">
                            <button class="btn btn-light mb-5" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                + Yêu Cầu Sách
                            </button>
                            <div class="form-row col-md-2">
                                <select name="category" class="form-control" required>
                                    <option value="cid" selected="selected" disabled>- - Danh Mục - -</option>
                                    <option value="All">- - All - -</option>
                                    <option value="Literary Fiction">Literary Fiction</option>
                                    <option value="Mystery">Mystery</option>
                                    <option value="Thriller">Thriller</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Historical">Historical</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Western">Western</option>
                                    <option value="Science Fiction">Science Fiction</option>
                                    <option value="Fantasy">Fantasy</option>
                                    <option value="Magical Realism">Magical Realism</option>
                                    <option value="Realist Literature">Realist Literature</option>
                                </select>
                            </div>

                            <div class="form-row col-md" >
                                <form class="form-row col-md">
                                    <div class="col-md">
                                        <input class="form-control" type="search" placeholder="Tìm kiếm bằng tiêu đề sách hoặc tác giả...">
                                    </div>
                                    <div class="col-md-0">
                                        <button class="btn btn-light" type="submit">Tìm Kiếm</button>
                                    </div>
                                </form>
                            </div>
                            <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionOne ">
                                <form class="form-row col-md">
                                    <div class="col-md">
                                        <input class="form-control" type="text" placeholder=" Tiêu Đề Sách..." required="required">
                                    </div>
                                    <div class="col-md">
                                        <input class="form-control" type="text" placeholder=" Tác Giả..." required="required">
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-light" type="submit">Gửi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>                      
                                <th scope="col">Mã sách</th>
                                <th scope="col">Tiêu đề sách</th>
                                <th scope="col">Tác giả</th>
                                <th scope="col">Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row">
                                <td>11</td>
                                <td><a href="book.php">Software Engineering</a></td>
                                <td>ABCDEFF</td>
                                <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>
                            </tr>
                            <tr role="row">
                                <td>49</td>
                                <td><a href="book.php">Python Cookbook</a></td>
                                <td>ABCDEFF</td>
                                <td><button class="btn btn-success btn-sm" disabled="disable">available</button></td>
                            </tr>
                            <tr role="row">
                                <td>1</td>
                                <td><a href="book.php">Machinery Handbook</a></td>
                                <td>ABCDEFF</td>
                                <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>
                            </tr>
                            <tr role="row">
                                <td>20</td>
                                <td><a href="book.php">Effective C++</a></td>
                                <td>Scott Meyers</td>
                                <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>
                            </tr>
                            <tr role="row">
                                <td>220</td>
                                <td><a href="book.php">Java 2</a></td>
                                <td>Herbert </td>
                                <td><button class="btn btn-success btn-sm" disabled="disable">available</button></td>
                            </tr>
                            <tr role="row">
                                <td>35</td>
                                <td><a href="book.php">A Brief History of Time</a></td>
                                <td>Stephen Hawkings</td>
                                <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>
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

