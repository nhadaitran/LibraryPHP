
<!DOCTYPE html>
<html lang="en">
    <?php include "masterpageAdmin/header.php" ?>
    <body class="bg-theme bg-theme2">
        <!-- Start wrapper-->
        <div id="wrapper">

            <!--Start sidebar-wrapper-->
            <?php include "masterpageAdmin/menuleft.php" ?>
            <!--End sidebar-wrapper-->

            <!--Start topbar header-->
            <?php include "masterpageAdmin/menutop.php" ?>

            <!--End topbar header-->

            <div class="clearfix"></div>

            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#issue" data-toggle="pill" class="nav-link active"><i class="zmdi zmdi-plus-square"></i> <span class="hidden-xs">Danh sách mượn</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#return" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-assignment-return"></i> <span class="hidden-xs">danh sách trả</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content p-3">

<!--                                    Start table Isuue-->
                                    <div class="tab-pane active" id="issue">
                                        <div class="container-fluid">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="accordion" id="accordionOne">
                                                            <div class="col-lg d-flex justify-content-center" style="margin:auto">
                                                                <button class="btn btn-light mb-5" type="button" data-toggle="collapse" data-target="#collapseOne"
                                                                        aria-expanded="true" aria-controls="collapseOne">
                                                                    + Thêm
                                                                </button>
                                                                <div class="form-row col-md-2">
                                                                    <select name="category" class="form-control" required>
                                                                        <option value="sid">- - ID Thành viên - -</option>
                                                                        <option value="bid" selected="selected">- - ID Sách - -</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-row col-md" style="margin-bottom: 3%;">
                                                                    <div class="form-row col-md">
                                                                        <div class="col-md">
                                                                            <input id="inputSearchIssue"  name="search" class="form-control" type="text" placeholder="Nhập Thông Tin Cần Tìm...">
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
                                                            <table  class="table table-hover">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">ID</th>
                                                                    <th scope="col">Name Admin</th>
                                                                    <th scope="col">Name Student</th>
                                                                    <th scope="col">Name Book</th>
                                                                    <th scope="col">Date issue</th>
                                                                    <th scope="col">Setting</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="tableIssue">
                                                                    <?php
                                                                        if(!empty($issueList)){
                                                                            foreach ($issueList as $issue){
                                                                                echo '<tr class="trIssue">';
                                                                                echo "<th scope='row'>" . $issue['id'] . "</th>";
                                                                                echo "<td>" . $issue['nameAdmin'] . "</td>";
                                                                                echo "<td>" . $issue['nameStudent'] . "</td>";
                                                                                echo "<td>" . $issue['nameBook'] . "</td>";
                                                                                echo "<td>" . $issue['dateissue'] . "</td>";
                                                                                echo "<td>
                                                                                            <button class='btn btn-primary zmdi zmdi-edit' type='button'/>
                                                                                            <button class='btn btn-danger zmdi zmdi-delete' type='button'/>
                                                                                      </td>";
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
                                    </div>
                                <!--End table Isuue-->

                            <!--start table return-->

                                    <div class="tab-pane" id="return">
                                        <div class="container-fluid">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="accordion" id="accordionOne">

                                                            <div class="col-lg d-flex justify-content-center" style="margin:auto">
                                                                <button class="btn btn-light mb-5" type="button" data-toggle="collapse" data-target="#collapseOne"
                                                                        aria-expanded="true" aria-controls="collapseOne">
                                                                    + Thêm
                                                                </button>
                                                                <div class="form-row col-md-2">
                                                                    <select name="category" class="form-control" required>
                                                                        <option value="sid">- - ID Thành viên - -</option>
                                                                        <option value="bid" selected="selected">- - ID Sách - -</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-row col-md" style="margin-bottom: 3%;">
                                                                    <form class="form-row col-md">
                                                                        <div class="col-md">
                                                                            <input class="form-control" type="search" placeholder="Nhập ID Thành Viên Hoặc ID Sách...">
                                                                        </div>
                                                                        <div class="col-md-0">
                                                                            <button class="btn btn-light" type="submit">Tìm kiếm</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionOne ">
                                                                    <form class="form-row col-md">
                                                                        <div class="col-md">
                                                                            <input class="form-control" type="text" placeholder=" ID Thành viên..." required="required">
                                                                        </div>
                                                                        <div class="col-md">
                                                                            <input class="form-control" type="text" placeholder=" ID Sách..." required="required">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <button class="btn btn-light" type="submit">Lưu</button>
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
                                                                    <th scope="col">Name Admin</th>
                                                                    <th scope="col">Name Student</th>
                                                                    <th scope="col">Name Book</th>
                                                                    <th scope="col">Date return</th>
                                                                    <th scope="col">Setting</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    if(!empty($returnList)){
                                                                        foreach ($returnList as $return){
                                                                            echo '<tr class="trIssue">';
                                                                            echo "<th scope='row'>" . $return['id'] . "</th>";
                                                                            echo "<td>" . $return['nameAdmin'] . "</td>";
                                                                            echo "<td>" . $return['nameStudent'] . "</td>";
                                                                            echo "<td>" . $return['nameBook'] . "</td>";
                                                                            echo "<td>" . $return['datereturn'] . "</td>";
                                                                            echo " <td>
                                                                                       <button class='btn btn-primary zmdi zmdi-edit' type='button'/>
                                                                                       <button class='btn btn-danger zmdi zmdi-delete' type='button'/>
                                                                                  </td>";
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
                                    </div>

                                        <!--end table return-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <!-- End container-fluid-->
        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <?php include "masterpageAdmin/footer.php" ?>
        <!--End footer-->

    </div><!--End wrapper-->


</body>
    <!--    ajax-->
    <script>
        //Search issue
        var inputSearchIssue = $("#inputSearchIssue");
        inputSearchIssue.on('input propertychange',function (){
            $.ajax({
                type: 'GET',
                url: 'ControllerIssue.php',
                data: {idIssueOrBook: inputSearchIssue.val(), action: 'searchIssue'},
                cache: false,
                dataType:'json',
                success: function (data) {
                    var tableIssue = $('#tableIssue');
                    $(".trIssue").remove();
                    $.each(data, function(key, element) {
                        var row = $('<tr class="trIssue"></tr>');
                        row.append($('<td>'+element['id']+'</td>'));
                        row.append($('<td>'+element['nameAdmin']+'</td>'));
                        row.append($('<td>'+element['nameStudent']+'</td>'));
                        row.append($('<td>'+element['nameBook']+'</td>'));
                        row.append($('<td>'+element['dateissue']+'</td>'));
                        row.append("<td>"
                            +"<button class='btn btn-primary zmdi zmdi-edit' type='button'/>"
                            +"<button class='btn btn-danger zmdi zmdi-delete' type='button'/>"
                            +"</td>");
                        tableIssue.append(row);
                    });
                }
            })
        })
    </script>

</html>
