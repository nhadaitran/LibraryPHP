
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Loại report</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableIssue">
                            <tr>
                                <td>Xuất báo cáo sách</td>
                                <td> <a href="ControllerBook.php?action=reportBook&report=all" type='submit' class='btn btn-secondary'>Xuất excel</a></td>
                            </tr>
                            <tr>
                                <td>Xuất báo cáo sách mới thêm trong tháng</td>
                                <td> <a href="ControllerBook.php?action=reportBook&report=month" class='btn btn-secondary'>Xuất excel</a></td>
                            </tr>
                            <tr>
                                <td>Xuất báo cáo mượn </td>
                                <td> <a href="ControllerIssue.php?action=reportIssue&report=all"  class='btn btn-secondary'>Xuất excel</a></td>
                            </tr>
                            <tr>
                                <td>Xuất báo cáo mượn trong ngày</td>
                                <td> <a href="ControllerIssue.php?action=reportIssue&report=day"  class='btn btn-secondary'>Xuất excel</a></td>
                            </tr>
                            <tr>
                                <td>Xuất báo cáo trả sách</td>
                                <td> <a href="ControllerReturn.php?action=reportReturn&report=all"  class='btn btn-secondary'>Xuất excel</a></td>
                            </tr>
                            <tr>
                                <td>Xuất báo cáo trả sách trong ngày</td>
                                <td> <a href="ControllerReturn.php?action=reportReturn&report=day"  class='btn btn-secondary'>Xuất excel</a></td>
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