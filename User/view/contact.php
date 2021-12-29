<!DOCTYPE html>
<html lang="en">
<?php include "masterpage/header.php" ?>

<body class="bg-theme bg-theme2">
    <!--Start topbar header-->
    <?php include "masterpage/menutop.php" ?>
    <!--End topbar header-->
    <div id="wrapper" class="toggled">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="container card col-lg-8">
                        <div class="card-body">
                            <!--Section: Contact v.2-->
                            <section class="mb-4">
                                <!--Section heading-->
                                <h2 class="h1-responsive font-weight-bold text-center my-4">Liên hệ</h2>
                                <!--Section description-->
                                <p class="text-center w-responsive mx-auto mb-5">Nếu có bất kỳ câu hỏi nào.
                                    Đừng ngần ngại hãy liên hệ với chúng tôi.Chúng tôi sẽ trả lời bạn sớm nhất có thể.</p>
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-9 mb-md-0 mb-5">
                                        <form id="contact-form" name="contact-form" onSubmit="return feedback()">

                                            <!--Grid row-->
                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <label for="name" class="">Họ và tên</label>
                                                        <?php
                                                        if ($user != null) {
                                                            echo '<input type="text" id="name" name="name" value ="' . $user['name'] . '" class="form-control" required>';
                                                        } else {
                                                            echo '<input type="text" id="name" name="name" class="form-control" required>';
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <label for="email" class="">Địa chỉ email</label>
                                                        <?php
                                                        if ($user != null) {
                                                            echo '<input type="text" id="email" name="email" value ="' . $user['email'] . '" class="form-control" required>';
                                                        } else {
                                                            echo '<input type="text" id="email" name="email" class="form-control" required>';
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                                <!--Grid column-->
                                            </div>
                                            <!--Grid row-->
                                            <!--Grid row-->
                                            <div class="row  mt-3">
                                                <div class="col-md-12">
                                                    <div class="md-form mb-0">
                                                        <label for="subject" class="">Chủ đề</label>
                                                        <input type="text" id="subject" name="subject" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row  mt-3">
                                                <!--Grid column-->
                                                <div class="col-md-12">
                                                    <div class="md-form">
                                                        <label for="content">Nội dung</label>
                                                        <textarea type="text" id="content" name="content" rows="2" class="form-control md-textarea" required></textarea>

                                                    </div>

                                                </div>
                                            </div>
                                            <!--Grid row-->
                                            <div class="text-center text-md-left mt-2">
                                                <button class="btn btn-primary" type="submit" id="btnSend" >Gửi</button>
                                            </div>    
                                        </form>
                                        
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-3 text-center">
                                        <ul class="list-unstyled mb-0">
                                            <li><i class="icon-home mr-2"></i>
                                                <p>180 Cao Lỗ,phường 4,quận 8,Tp.Hồ Chí Minh</p>
                                            </li>

                                            <li><i class="icon-phone mr-2"></i>
                                                <p>+ 84 234 567 89</p>
                                            </li>

                                            <li><i class="icon-star mr-2"></i>
                                                <p>@student.stu.edu.vn</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Grid column-->
                                </div>
                            </section>
                            <!--Section: Contact v.2-->
                        </div>
                        <hr />
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.955199226403!2d106.67572621477098!3d10.737936392347683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fad182844dd%3A0xe3099eb4c87f5610!2zMTgwIMSQxrDhu51uZyBDYW8gTOG7lywgUGjGsOG7nW5nIDQsIFF14bqtbiA4LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1636710852056!5m2!1svi!2s" height="300px" style="border:0;" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- TOAST -->
    <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
        <div id="liveToastFeedback" class="toast hide bg-transparent" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
            <div class="toast-header">
                <img src="https://www.svgrepo.com/show/63321/avatar.svg" alt="User Avatar" style="width:10%">
                <strong class="mr-auto">Thủ Thư</strong>
                <small>vừa mới đây</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Feedback của bạn đã được gửi !
            </div>
        </div>
    </div>
    <!-- TOAST END -->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <?php include "masterpage/footer.php" ?>
        <!--End footer-->
    </div>
</body>
</html>