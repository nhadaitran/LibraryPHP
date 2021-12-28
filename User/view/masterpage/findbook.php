<div class="tab-pane active" id="find">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordionOne">
                        <div class="col-lg d-flex justify-content-center">
                            <div class="form-row col-md-2">
                                <select name="category" id="category" class="form-control" required onchange="search_cat();">
                                    <option value="0">Danh Mục</option>
                                    <?php
                                    foreach ($listCat as $cat) {
                                        echo '<option value="' . $cat->getId() . '"><a href=?category=' . $cat->getId() . '>' . $cat->getName() . '</a></option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-row col-md">
                                <input class="form-control" type="text" name="search" id="search" placeholder="Tìm kiếm bằng tiêu đề sách..." onkeyup="search_data()">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="table-responsive" id="search_table">
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
                            foreach ($listBook as $book) {
                                $book['name'] = strlen($book['name']) > 90 ? substr($book['name'], 0, 90) . "..." : $book['name'];
                                echo '<tr role="row">';
                                echo '<td>' . $book['id'] . '</td>';
                                echo '<td><a href=?book=' . $book['id'] . '>' . $book['name'] . '</a></td>';
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
    <!-- TOAST -->
    <div class="position-fixed bottom-0 right-0 p-3" id="request_success" style="z-index: 5; right: 0; bottom: 0;">
        <div id="liveToastRequest" class="toast hide bg-transparent" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
            <div class="toast-header">
                <img src="https://www.svgrepo.com/show/63321/avatar.svg" alt="User Avatar" style="width:10%" />
                <strong class="mr-auto">Thủ Thư</strong>
                <small>vừa mới đây</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Yêu cầu của bạn đã được gửi cho Admin.
            </div>
        </div>
    </div>
    <!-- TOAST END -->
</div>