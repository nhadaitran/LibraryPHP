
<div class="tab-pane active" id="member">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-row col-md" style="margin-bottom: 3%;">
                        <div class="col-md">
                            <input id="inputSearchMember" name="idMember" class="timkiem form-control" type="text" placeholder="Nhập ID Thành viên...">
                        </div>

                    </div>
                    

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Student ID</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Lock</th>
                                    <th scope="col">Setting</th>
                                </tr>
                            </thead>
                            <tbody id="tableMember">
                                <?php
                                if (!empty($data["memberList"])) {
                                    foreach ($data["memberList"] as $member) {
                                        echo '<tr class="trMember">
                                            <th scope="row">' . $member['id'] . '</th>
                                            <td>' . $member['name'] . '</td>
                                            <td>' . $member['username'] . '</td>
                                            <td>' . $member['password'] . '</td>
                                            <td>' . $member['email'] . '</td>
                                            <td>' . $member['lock'] . '</td>
                                            <td>
                                            <form action="../../Controller/ControllerMember.php" method="GET">
                                                <button class="btn btn-primary zmdi zmdi-edit" type="button"></button>
                                                <button class="btn btn-danger zmdi zmdi-delete" type="button"></button>
                                                <a href="../Controller/ControllerMember.php?action=lock&id='. $member['id'].'" class="btn btn-warning zmdi zmdi-lock" type="button"></a>
                                            </form>
                                            </td>
                                        </tr>';
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
</div>