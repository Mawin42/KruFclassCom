
<?php include('head.php');?>
<body >

    <?php include('Menu.php');?>

    <!-- Latest Preview Section Begin -->
    <section class="latest-preview-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>แผนการจัดการเรียนรู้ 
                        <span class="badge rounded-pill bg-danger">  จำนวน
                            <?php 
                                $sql1 ="SELECT * FROM fileps";
                                $row = mysqli_query($con,$sql1);
                                $nrom = mysqli_num_rows($row);
                                echo $nrom;?> รายการ
                        </span></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="lp-slider owl-carousel">
                    <?php $sql = "SELECT * FROM fileps ORDER BY idfileps DESC ";
                                $result = $con->query($sql);?>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="fileps/<?php echo $row['imgfileps'];?>">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="fileps/<?php echo $row['fileps'];?>"><?php echo $row['namefileps'];?></a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <?php echo $row['datefileps'];?></li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Preview Section End -->

    <!-- Update News Section Begin -->
    <section class="update-news-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h5><span>News & update</span></h5>
                    </div>
                    <div class="tab-elem">

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                        <iframe  src='https://pubhtml5.com/bookcase/evno'  
                                            width="100%" height="850" style="border:none;" >
                                        </iframe>   
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-2" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-3" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-4" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-option">
                        <div class="social-media">
                            <div class="section-title">
                                <h5>Social media</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-facebook"></i></div>
                                    <span>Facebook</span>
                                    <div class="follow">1,2k Follow</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-twitter"></i></div>
                                    <span>Twitter</span>
                                    <div class="follow">1,2k Follow</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-youtube-play"></i></div>
                                    <span>Youtube</span>
                                    <div class="follow">2,3k Subs</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-instagram"></i></div>
                                    <span>Instagram</span>
                                    <div class="follow">2,6k Follow</div>
                                </li>
                            </ul>
                        </div>
                        <div class="hardware-guides">
                            <div class="section-title">
                                <h5>Hardware guides</h5>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-5.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">A Monster Prom poster got hijacked for a Papa Roach concert...</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-6.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">Facebook wants to read your thoughts with its augmented...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-7.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">This gaming laptop with a GTX 1660 Ti and 32GB of RAM is down...</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/trending-8.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">Jalopy developer is making a game where you 'build stuff...</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Update News Section End -->


    <!-- <section class="video-guide-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Videos guide</h5>
                    </div>
                </div>
            </div>
            <div class="tab-elem">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Platform</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Hardware</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-8" role="tab">Reviews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-5" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-6" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-7" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-8" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://youtu.be/BOIxt4Tgty4"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Instagram Post Section Begin -->
    <section class="instagram-post-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h5>บทเรียนออลไลน์ รายวิชาวิทยาการคำนวณ</h5>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/ป4.png" width="300" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Reviews</span></div>
                            <h5><a href="#">เทคโนโลยี (วิทยาการคำนวณ)<p> ชั้นประถมศึกษาปีที่ 4</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2022</li>
                                <li><i class="fa fa-comment-o"></i>มาตรฐาน ว 4.2 </li>
                            </ul>
                            <p>เข้าใจและใช้แนวคิดเชิงคำนวณในการแก้ปัญหาที่พบในชีวิตจริงอย่างเป็นขั้นตอนและเป็นระบบ ใช้เทคโนโลยี
                            สารสนเทศและการสื่อสารในการเรียนรู้ การทำงาน และการแก้ปัญหาได้อย่างมีประสิทธิภาพ รู้เท่าทัน และมี
                            จริยธรรม</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/ป5.png" width="300" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Windows</span></div>
                            <h5><a href="#">เทคโนโลยี (วิทยาการคำนวณ)<p> ชั้นประถมศึกษาปีที่ 5</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2022</li>
                                <li><i class="fa fa-comment-o"></i>มาตรฐาน ว 4.2 </li>
                            </ul>
                            <p>เข้าใจและใช้แนวคิดเชิงคำนวณในการแก้ปัญหาที่พบในชีวิตจริงอย่างเป็นขั้นตอนและเป็นระบบ ใช้เทคโนโลยี
                            สารสนเทศและการสื่อสารในการเรียนรู้ การทำงาน และการแก้ปัญหาได้อย่างมีประสิทธิภาพ รู้เท่าทัน และมี
                            จริยธรรม</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/ป6.png" width="300" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Hardware</span></div>
                            <h5><a href="#">เทคโนโลยี (วิทยาการคำนวณ)<p> ชั้นประถมศึกษาปีที่ 6</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2022</li>
                                <li><i class="fa fa-comment-o"></i>มาตรฐาน ว 4.2 </li>
                            </ul>
                            <p>เข้าใจและใช้แนวคิดเชิงคำนวณในการแก้ปัญหาที่พบในชีวิตจริงอย่างเป็นขั้นตอนและเป็นระบบ ใช้เทคโนโลยี
                            สารสนเทศและการสื่อสารในการเรียนรู้ การทำงาน และการแก้ปัญหาได้อย่างมีประสิทธิภาพ รู้เท่าทัน และมี
                            จริยธรรม</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/ม1.png" width="300" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Playstation</span></div>
                            <h5><a href="m1.php">เทคโนโลยี (วิทยาการคำนวณ)<p> ชั้นมัธยมศึกษาปีที่ 1</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2022</li>
                                <li><i class="fa fa-comment-o"></i>มาตรฐาน ว 4.2 </li>
                            </ul>
                            <p>เข้าใจและใช้แนวคิดเชิงคำนวณในการแก้ปัญหาที่พบในชีวิตจริงอย่างเป็นขั้นตอนและเป็นระบบ ใช้เทคโนโลยี
                            สารสนเทศและการสื่อสารในการเรียนรู้ การทำงาน และการแก้ปัญหาได้อย่างมีประสิทธิภาพ รู้เท่าทัน และมี
                            จริยธรรม</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/ม2.png" width="300" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Playstation</span></div>
                            <h5><a href="m2.php">เทคโนโลยี (วิทยาการคำนวณ)<p> ชั้นมัธยมศึกษาปีที่ 2</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2022</li>
                                <li><i class="fa fa-comment-o"></i>มาตรฐาน ว 4.2 </li>
                            </ul>
                            <p>เข้าใจและใช้แนวคิดเชิงคำนวณในการแก้ปัญหาที่พบในชีวิตจริงอย่างเป็นขั้นตอนและเป็นระบบ ใช้เทคโนโลยี
                            สารสนเทศและการสื่อสารในการเรียนรู้ การทำงาน และการแก้ปัญหาได้อย่างมีประสิทธิภาพ รู้เท่าทัน และมี
                            จริยธรรม</p>
                        </div>
                    </div>
                    <div class="ip-item">
                        <div class="ip-pic">
                            <img src="img/ม3.png" width="300" alt="">
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>Playstation</span></div>
                            <h5><a href="m3.php">เทคโนโลยี (วิทยาการคำนวณ)<p> ชั้นมัธยมศึกษาปีที่ 3</a></h5>
                            <ul>
                                <li>by <span>Admin</span></li>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2022</li>
                                <li><i class="fa fa-comment-o"></i>มาตรฐาน ว 4.2 </li>
                            </ul>
                            <p>เข้าใจและใช้แนวคิดเชิงคำนวณในการแก้ปัญหาที่พบในชีวิตจริงอย่างเป็นขั้นตอนและเป็นระบบ ใช้เทคโนโลยี
                            สารสนเทศและการสื่อสารในการเรียนรู้ การทำงาน และการแก้ปัญหาได้อย่างมีประสิทธิภาพ รู้เท่าทัน และมี
                            จริยธรรม</p>
                        </div>
                    </div>
                    <div class="pagination-item">
                        <a href="#"><span>1</span></a>
                        <a href="#"><span>2</span></a>
                        <a href="#"><span>3</span></a>
                        <a href="#"><span>Next</span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="sidebar-option">
                        <div class="insta-media">
                            <div class="section-title">
                                <h5>Instagram</h5>
                            </div>
                            <div class="insta-pic">
                                <img src="img/instagram/ip-1.jpg" alt="">
                                <img src="img/instagram/ip-2.jpg" alt="">
                                <img src="img/instagram/ip-3.jpg" alt="">
                                <img src="img/instagram/ip-4.jpg" alt="">
                            </div>
                        </div>
                        <?php include('langnog.php');?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Post Section End -->

    <?php include('footer.php');?>
</body>

</html>