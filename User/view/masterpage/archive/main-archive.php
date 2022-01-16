<div class="whats-news-wrapper">
    <!-- Heading & Nav Button -->
    <div class="row justify-content-between align-items-end mb-15">
        <div class="col-xl-4">
            <div class="section-tittle mb-30">
                <h2>Tin mới nhất</h2>
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
                                    <?php
                                        $newLast = $listNews[0];
                                    ?>
                                    <?php
                                    if($newLast['image']!=null){
                                            echo '<img class="img-fluid " src="../../Admin/image/'.$newLast['image'].'" alt="news-image">';
                                        }else{
                                            echo '<img class="img-fluid " src="https://via.placeholder.com/800x400" alt="news-image">';
                                        }
                                        ?>
                                </div>
                                <div>
                                    <div class="badge badge-success"><?php echo $newLast["nameCategory"] ?></div>
                                    <?php echo '<h4><a href=?news=' . $newLast['id'] . '>'.$newLast["title"].'</a></h4>';?>
                                    <span><?php echo $newLast["nameAdmin"]." - ".$newLast["datenews"] ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Right single caption -->
                        <div class="card col-xl-6 col-lg-12 bg-transparent">
                            <div class="row">
                                <?php
                                    foreach ($listNews as $News){
                                        echo '<div class="card col-xl-12 col-lg-6 col-md-6 col-sm-10 bg-transparent">'
                                            .'<div class="row">'
                                            .'<div class="col-md-3 card-img">';
                                            if($News['image']!=null){
                                                echo '<img class="img-fluid " src="../../Admin/image/'.$News['image'].'" alt="news-image">';
                                            }else{
                                                echo '<img class="img-fluid " src="https://via.placeholder.com/150x150" alt="news-image">';
                                            }                                            
                                            echo '</div>'
                                            .'<div class="col-md-9 p-1">'
                                            .'<div class="badge badge-success">'.$News["nameCategory"].'</div>'
                                            .'<h4><a href=?news=' . $News['id'] . '>'.$News["title"].'</a></h4>'
                                            .'<span>'.$News["nameAdmin"]." - ".$News["datenews"].'</span>'
                                            .'</div>'
                                            .'</div>'
                                            .'</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </div>
</div>