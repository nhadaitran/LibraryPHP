<div class="whats-news-wrapper">
    <!-- Heading & Nav Button -->
    <div class="row justify-content-between align-items-end mb-15">
        <div class="col-xl-4">
            <div class="section-tittle mb-30">
                <h2>Tin mới nhất</h2>
            </div>
        </div>
        <div class="col-xl-8 col-md-9">
            <div class="d-flex justify-content-end">
                <!--Nav Button  -->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Category</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Category</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Category</a>
                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Category</a>
                        <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Category</a>
                    </div>
                </nav>
                <!--End Nav Button  -->
            </div>
        </div>
    </div>
    <!-- Tab content -->
    <div class="row">
        <div class="col-12">
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <!-- Left Details Caption -->
                        <div class="card col-xl-6 col-lg-12 bg-transparent">
                            <div class="mt-3 mb-3">
                                <div class="card-img">
                                    <img class="img-fluid " src="https://via.placeholder.com/800x400" alt="">
                                </div>
                                <div>
                                    <a href="javascript:void();" class="badge badge-success">Thể loại</a>
                                    <h4><a href="news_post.php">Tiêu đề</a></h4>
                                    <p>Nội dung bản tin</p>
                                    <span>Đăng bởi Admin - Jun 19, 2020</span>
                                </div>
                            </div>
                        </div>
                        <!-- Right single caption -->
                        <div class="card col-xl-6 col-lg-12 bg-transparent">
                            <div class="row">
                            <?php include_once __DIR__."/single-main-archive.php" ?>
                            <?php include_once __DIR__."/single-main-archive.php" ?>
                            <?php include_once __DIR__."/single-main-archive.php" ?>
                            <?php include_once __DIR__."/single-main-archive.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </div>
</div>