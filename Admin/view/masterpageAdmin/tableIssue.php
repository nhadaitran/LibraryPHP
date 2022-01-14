<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="accordion" id="accordionOne">
                    <div class="col-lg d-flex justify-content-center" style="margin:auto">
                        <button class="btn btn-light mb-5" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            + Thêm
                        </button>
                        <div class="form-row col-md" style="margin-bottom: 3%;">
                            <div class="form-row col-md">
                                <div class="col-md">
                                    <input id="inputSearchIssue" name="search" class="form-control" type="text" placeholder="Nhập Thông Tin Cần Tìm...">
                                </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionOne ">
                            <form id="addIssue" class="form-row col-md">
                                <div class="col-md">
                                    <input class="form-control" type="text" placeholder=" ID Thành viên..." required="required">
                                </div>
                                <div class="col-md">
                                    <input class="form-control" type="text" placeholder=" ID Sách..." required="required">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-light" type="submit">Thêm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name Student</th>
                                <th scope="col">Name Book</th>
                                <th scope="col">Date issue</th>
                                <th scope="col">Status</th>
                                <th scope="col">Approved by</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableIssue">
                            <?php
                            if (!empty($data["issueList"])) {
                                foreach ($data["issueList"] as $issue) {
                                    echo '<tr class="trIssue">';
                                    echo "<th scope='row'>" . $issue['id'] . "</th>";
                                    echo "<td>" . $issue['nameStudent'] . "</td>";
                                    echo "<td>" . $issue['nameBook'] . "</td>";
                                    echo "<td>" . $issue['dateissue'] . "</td>";
                                    if (!$issue['nameAdmin'])
                                        echo "<td>" . "Chờ duyệt" . "</td>";
                                    else
                                        echo "<td>" . "Đang mượn" . "</td>";
                                    if (empty($issue['nameAdmin']))
                                        echo "<td>" . "Chưa có" . "</td>";
                                    else
                                        echo "<td>" . $issue['nameAdmin'] . "</td>";
                                    if ($issue['status'] == 0) {
                                        $id = $issue['id'];
                                        echo "
                                    <td>
                                    <form action='ControllerIssue.php' method='post'>
                                    <input type='text' hidden name='id' value='$id'>
                                        <button type='submit' class='btn btn-success' name='action' value='yes'>Yes</button>
                                        <button type='submit' class='btn btn-danger' name='action' value='no'>No</button>
                                        </form>
                                    </td>";
                                    } else
                                        echo "<td>" . "None" . "</td>";
                                    echo "</tr>";
                                }
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