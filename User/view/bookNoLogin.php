<!DOCTYPE html>
<html lang="en">    
<?php include "masterpage/header.php" ?>
    <body class="bg-theme bg-theme2">
        <!-- Start wrapper-->
        <div id="wrapper" class="toggled">           
            <!--Start topbar header-->
            <header class="topbar-nav">
                <nav class="navbar navbar-expand fixed-top">
                    <ul class="navbar-nav mr-auto align-items-center">
                        <li class="nav-item">
                            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                            <h5 class="logo-text">Library</h5>
                        </li>
                    </ul>

                    <ul class="navbar-nav align-items-center right-nav-link">
                        <li class="nav-item">
                            <a class="nav-link fa fa-user-circle" href="login.php">
                                Đăng nhập
                            </a>                           
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fa fa-plus-circle" href="register.php">
                                Đăng ký
                            </a>                           
                        </li>
                    </ul>
                </nav>
            </header>
            <!--End topbar header-->
            <div class="content-wrapper">
                <div class="container-fluid">

                    <div class="row mt-3">
                        <div class="col-lg-3">
                            <div class="card profile-card-2">
                                <div class="card-img-block">
                                    <img class="img-fluid" src="https://via.placeholder.com/800x500" alt="Card image cap">
                                </div>
                                <div class="card-body pt-5">
                                    <img src="https://via.placeholder.com/110x110" alt="profile-image" class="profile">
                                    <h5 class="card-title">Mark Stern</h5>
                                    <p class="card-text">Giới thiệu tác giả</p>                                    
                                </div>

                                <div class="card-body border-top border-light">
                                    <div class="media align-items-center">                                        
                                        <div class="media-body text-left ml-3">
                                            <div class="progress-wrapper">
                                                <p>Sách A <span class="float-right"><i class="zmdi zmdi-favorite">65</i></span></p>
                                                <div>
                                                    Thể loại sách A
                                                </div>
                                            </div>                   
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media align-items-center">                                        
                                        <div class="media-body text-left ml-3">
                                            <div class="progress-wrapper">
                                                <p>Sách B <span class="float-right"><i class="zmdi zmdi-favorite">34</i></span></p>
                                                <div>
                                                    Thể loại sách B
                                                </div>
                                            </div>                   
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media align-items-center">                                        
                                        <div class="media-body text-left ml-3">
                                            <div class="progress-wrapper">
                                                <p>Sách C <span class="float-right"><i class="zmdi zmdi-favorite">70</i></span></p>
                                                <div>
                                                    Thể loại sách C
                                                </div>
                                            </div>                   
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                        <li class="nav-item">
                                            <a href="javascript:void();" data-target="#bookinfo" data-toggle="pill" class="nav-link active"><i class="zmdi zmdi-info"></i> <span class="hidden-xs">Thông tin sách</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void();" data-target="#rate" data-toggle="pill" class="nav-link"><i class="zmdi zmdi-comment-edit"></i> <span class="hidden-xs">Đánh giá</span></a>
                                        </li>                                                                                                                        
                                    </ul>
                                    <div class="tab-content p-3">

                                        <!--BOOK INFO-->
                                        <div class="tab-pane active" id="bookinfo">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h3 class="">Tiêu đề sách</h3>
                                                </div>
                                                <div class="col-md-4 mt-3 mb-3 d-flex justify-content-between">
                                                    <a class="btn btn-success fa fa-heart-o" href="#"></a>
                                                    <a class="btn btn-primary fa fa-check" href="#"></a>                                                    
                                                    <a class="btn btn-danger fa fa-flag" href="#"></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h6>Thể loại</h6>
                                                    <a href="javascript:void();" class="badge badge-dark badge-pill">Trinh thám</a>
                                                    <a href="javascript:void();" class="badge badge-dark badge-pill">Phiêu lưu</a>
                                                    <a href="javascript:void();" class="badge badge-dark badge-pill">Hành động</a>
                                                    <a href="javascript:void();" class="badge badge-dark badge-pill">Kinh dị</a>
                                                    <a href="javascript:void();" class="badge badge-dark badge-pill">Giả tưởng</a>

                                                    <hr>
                                                    <span class="badge badge-primary"><i class="fa fa-user"></i> 120 Followers</span>                                                    
                                                    <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                                                    <hr>
                                                    <h6>Mô tả</h6>
                                                    <p>
                                                        Blah blah, v.v.....
                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <img class="img-fluid " src="https://via.placeholder.com/400x500" alt="book-image">                                                    
                                                </div>                                                
                                            </div>
                                            <!--/row-->
                                            <a class="btn btn-light fa fa-long-arrow-left" href="../../index.php"><span>Quay lại</span></a>
                                            <!--BOOK INFO-->
                                        </div>                                                                                


                                        <!--RATE-->
                                        <div class="tab-pane" id="rate">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <tbody>                                    
                                                        <tr>
                                                            <td>
                                                                <h5>Rick</h5>
                                                                <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>Tony</h5>
                                                                <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>Elon</h5>
                                                                <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>Paul</h5>
                                                                <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5>Mr.H</h5>
                                                                <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
                                                            </td>
                                                        </tr>
                                                    </tbody> 
                                                </table>
                                            </div>
                                            <form action="" method="">
                                                <div class="position-relative has-icon-right">
                                                    <input type="text" id="comment" class="form-control input-shadow" placeholder="Bình luận tại đây!">
                                                    <span class="float-right form-control-position">
                                                        <a class="" href="#"><i class="fa fa-paper-plane"></i></a>                                                            
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        <!--RATE-->
                                    </div>
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
            <?php include "masterpage/footer.php" ?>
            <!--End footer-->


        </div><!--End wrapper-->


    </body>
</html>
