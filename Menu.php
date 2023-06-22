    <!-- Humberger Menu Begin -->
    <div class="humberger-menu-overlay"></div>
    <div class="humberger-menu-wrapper">
        <div class="hw-logo">
            <a href="#"><img src="img/1.png" alt=""></a>
        </div>
        <div class="hw-menu mobile-menu">
            <ul>
                <li><a href="./index.php">หน้าแรก</a></li>
                <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="./categories-list.html">Categories</a></li>
                        <li><a href="./categories-grid.html">Categories grid</a></li>
                        <li><a href="./typography.html">Typography</a></li>
                        <li><a href="./details-post-default.html">Post default</a></li>
                        <li><a href="./details-post-gallery.html">Post gallery</a></li>
                        <li><a href="./details-post-review.html">Post review</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </li>
                <li><a href="#">Reviews <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Playstation</a></li>
                        <li><a href="#">Windows</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Xbox</a></li>
                    </ul>
                </li>
                <li><a href="#">Windows <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Playstation</a></li>
                        <li><a href="#">Windows</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Xbox</a></li>
                    </ul>
                </li>
                <li><a href="#">Videos <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Playstation</a></li>
                        <li><a href="#">Windows</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Xbox</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="hw-copyright">
            Copyright © 2019 Colorlib Inc. All rights reserved
        </div>
        <div class="hw-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="hw-insta-media">
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
    </div>
    <!-- Humberger Menu End --> 
 <!-- Header Section Begin -->
    <header class="header-section">
        <div class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       <a href="./index.html"><img src="img/2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-options">
            <div class="container">
                <div class="humberger-menu humberger-open">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li class="active"><a href="./index.php"><span>หน้าแรก</span></a></li>
                        <!-- <li class="mega-menu"><a href="#"><span>Platform <i class="fa fa-angle-down"></i></span></a>
                            <div class="megamenu-wrapper">
                                <ul class="mw-nav">
                                    <li><a href="#"><span>Playstation</span></a></li>
                                </ul>
                                <div class="mw-post">

                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="gif/" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="#">A Monster Prom poster got hijacked for a Papa Roach
                                                    concert...</a></h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <!-- <li>
                            <a href="#"><span>Pages <i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown">
                                <li><a href="./school.php">School</a></li>
                                <li><a href="./categories-grid.html">Categories grid</a></li>
                                <li><a href="./typography.html">Typography</a></li>
                                <li><a href="./details-post-default.html">Post default</a></li>
                                <li><a href="./details-post-gallery.html">Post gallery</a></li>
                                <li><a href="./details-post-review.html">Post review</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="#"><span>ภาพกิจกรรม <i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown">
                                <li><a href="./school.php">SCHOOL                 
                                    <span class="badge rounded-pill  bg-danger">
                                        <?php 
                                            $sql1 ="SELECT * FROM schooljpg";
                                            $row = mysqli_query($con,$sql1);
                                            $nrom = mysqli_num_rows($row);
                                            echo $nrom;?>
                                    </span></a></li>
                                <li><a href="./classroom.php">ROOM               
                                    <span class="badge rounded-pill bg-danger">
                                        <?php 
                                            $sql1 ="SELECT * FROM roomjpg";
                                            $row = mysqli_query($con,$sql1);
                                            $nrom = mysqli_num_rows($row);
                                            echo $nrom;?>
                                    </span></a></li>
                                <li><a href="./outside.php">OUTSIDE               
                                    <span class="badge rounded-pill bg-danger">
                                    <?php 
                                        $sql1 ="SELECT * FROM externaljpg";
                                        $row = mysqli_query($con,$sql1);
                                        $nrom = mysqli_num_rows($row);
                                        echo $nrom;?>
                                    </span></a></li>
                            </ul>
                        </li>
                        <li><a href="KRUF.php">ครูผู้สอน/Webmaster</a></li>
                        <li>
                            <a href="#"><span>ส่งงาน <i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown">
                                <li><a href="./song4.php">ส่งงาน ป.4</a></li>
                                <li><a href="./song5.php">ส่งงาน ป.5</a></li>
                                <li><a href="./song6.php">ส่งงาน ป.6</a></li>
                                <li><a href="./song1.php">ส่งงาน ม.1</a></li>
                                <li><a href="./song2.php">ส่งงาน ม.2</a></li>
                                <li><a href="./song3.php">ส่งงาน ม.3</a></li>
                            </ul>
                        </li>
                        <li><a href="pnnr.php">ผลงานนักเรียน                 
                            <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">
                            <?php 
                                $sql1 ="SELECT * FROM jpgl";
                                $row = mysqli_query($con,$sql1);
                                $nrom = mysqli_num_rows($row);
                                echo $nrom;?>
                            </span>
                        </a></li>
                        <li><a href="ktibut.php">เกียรติบัตร                 
                            <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">
                            <?php 
                                $sql1 ="SELECT * FROM jpgf";
                                $row = mysqli_query($con,$sql1);
                                $nrom = mysqli_num_rows($row);
                                echo $nrom;?>
                            </span> 
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->