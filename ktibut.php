
<?php include('head.php');?>
<body >

    <?php include('Menu.php');?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg spad" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h3>หมวดหมู่: <span>เกียรติบัตร</span></h3>
                        <div class="bt-option">
                            <a href="#">หน้าแรก</a>
                            <a href="#">Latest posts</a>
                            <span>Hardware</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Categories Grid Section Begin -->
    <section class="categories-grid-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="row">
                        <?php 
                            $sql = "SELECT * FROM jpgf";
                            $result = $con->query($sql);
                            // $result = mysqli_query($con, $sql);
                            ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <div class="col-lg-4">
                            <div class="cg-item">
                                <div class="cg-pic set-bg" data-setbg="./jpgf/<?php echo $row['img'];?>">
                                    <div class="label"><span>Reviews</span></div>
                                </div>
                                <div class="cg-text">
                                    <h5><a href="#"><?php echo $row['name'];?></a></h5>
                                    <ul>
                                        <li>by <span><?php echo $row['rname'];?></span></li>
                                        <li><i class="fa fa-clock-o"></i> <?php echo $row['date'];?></li>
                                    </ul>
                                    <p><?php echo $row['lname'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile ?>
                    </div>
                    <div class="pagination-item">
                        <a href="#"><span>1</span></a>
                        <a href="#"><span>2</span></a>
                        <a href="#"><span>3</span></a>
                        <a href="#"><span>Next</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Post Section End -->

    <?php include('footer.php');?>
</body>

</html>