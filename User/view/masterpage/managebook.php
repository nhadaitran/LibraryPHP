<div class="tab-pane" id="manage">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg d-flex justify-content-start">
                        <div class="form-row col-md-2">
                            <select name="categorybook" id="categorybook" class="form-control" required onchange="manage_book();">
                                <option value="3">Yêu Thích</option>
                                <option value="1">Đang Mượn</option>
                                <option value="2">Đã Trả</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="table-responsive" id="table">
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
                            <?php
                            foreach ($listBookFav as $book) {
                                echo '<tr role="row">';
                                echo '<td>' . $book['id_book'] . '</td>';
                                echo '<td><a href=?book=' . $book['id_book'] . '>' . $book['name'] . '</a></td>';
                                echo '<td>' . $book['author'] . '</td>';
                                if ($book['status'] == 1) {
                                    echo ' <td><button class="btn btn-danger btn-sm" disabled="disable">not available</button></td>';
                                } else {
                                    echo ' <td><button class="btn btn-success btn-sm" disabled="disable">available</button></td>';
                                }
                                echo '</tr>';
                            }
                            ?>
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