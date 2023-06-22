<div class="best-of-post">
                            <div class="section-title">
                                <h5>แหล่งเรียนรู้ภายนอก
                                <span class="badge rounded-pill bg-danger">  จำนวน
                                    <?php 
                                        $sql1 ="SELECT * FROM Morejpg";
                                        $row = mysqli_query($con,$sql1);
                                        $nrom = mysqli_num_rows($row);
                                        echo $nrom;?>
                                </span></h5>
                            </div>
                            <?php $sql = "SELECT * FROM Morejpg";
                            $result = $con->query($sql);?>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <div class="hardware-guides">
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="kkMore/<?php echo $row['imgMore'];?>" width="50" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="<?php echo $row['linkMore'];?>"><?php echo $row['nameMore'];?></a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                            <?php endwhile ?>
                        </div>