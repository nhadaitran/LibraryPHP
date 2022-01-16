<?php
$user = $_SESSION['user'];
?>

<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
            <a class="nav-item" href="../../User/Controller/ControllerPage.php?page=home">
                <img src="../view/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">Library</h5>
            </a>
        </ul>
        <ul class="navbar-nav align-items-center right-nav-link ">
            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                    <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-item user-details">
                        <a href="javaScript:void();" id="user_detail">
                            <div class="media">
                                <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                <div class="media-body">
                                    <h6 class="mt-2 user-title">
                                        <?php
                                        if (!empty($user)) {
                                            echo $user['name'];
                                        } else {
                                            echo "Lỗi hiển thị";
                                        }
                                        ?>
                                    </h6>
                                    <p class="user-subtitle">
                                        <?php
                                        if (!empty($user)) {
                                            echo $user['email'];
                                        } else {
                                            echo "Lỗi hiển thị";
                                        }
                                        ?>

                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><a href="../../User/Controller/ControllerPage.php?page=home"><i class="fa fa-home mr-2"></i>Trang chủ</a></li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><a href="../../User/Controller/ControllerPage.php?page=fav"><i class="fa fa-heart mr-2"></i>Yêu Thích</a></li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><a href="../../User/Controller/ControllerPage.php?page=contact"><i class="fa fa-phone mr-2"></i>Liên hệ</a></li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><a href="../../User/Controller/ControllerPage.php?page=news"><i class="fa fa-newspaper-o mr-2"></i>Tin Tức</a></li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><a href="./ControllerPage.php?page=login" method="post"><i class="fa fa-sign-out mr-2"></i> Đăng Xuất</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>