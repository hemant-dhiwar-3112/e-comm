<?php include ('header.php');
include ('config.php');
$ID = $_GET['id'];


if ($_GET['cart'] == 'C') { ?>

    <div class="back" style=" background-color: #f7f8f9;">
        <div class="container">
            <div class="row hight">
                <?php $sql = 'select * from mycard where C_ID= "' . $ID . '"';
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) { ?>
                    <div class="col-md-6 photo">
                        <div class="img-box w-100 h-100" style="padding: 0 22%;">
                            <img src=".//image/card/<?php echo $row['C_poster']; ?>" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pro-detail">
                            <div class="head">
                                <h6>
                                    <?php echo $row['C_name'];
                                    ' ';
                                    echo $row['C_last']; ?>
                                </h6>
                            </div>
                            <div class="body">
                                <div class="body-head">Highlights

                                </div>
                                <div class="body-item">
                                    <ul>
                                        <li><?php echo $row['hi1']; ?></li>
                                        <li><?php echo $row['hi2']; ?></li>
                                        <li><?php echo $row['hi3']; ?></li>
                                        <li><?php echo $row['hi4']; ?></li>
                                        <li><?php echo $row['hi5']; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer">
                                <h5>
                                    <?php echo $row['C_cast']; ?>₹
                                </h5>
                                <a href="selectadd.php?cid=<?php echo $row['C_ID']; ?>" class="btn form-group">Continue</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php

} else {

    $Name = $_GET["name"];
    if ($Name == 'D') {
        ?>

        <div class="back" style=" background-color: #f7f8f9;">
            <div class="container">
                <div class="row hight">
                    <?php $sql = 'select * from ecomm_product_D where D_ID= "' . $ID . '"';
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="col-md-6 photo">
                            <div class="img-box w-100 h-100" style="padding: 0 22%;">
                                <img src=".//image/dreesh/<?php echo $row['D_poster']; ?>" alt="" class="w-100">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pro-detail">
                                <div class="head">
                                    <h6>
                                        <?php echo $row['D_name'];
                                        ' ';
                                        echo $row['D_last']; ?>
                                    </h6>
                                </div>
                                <div class="body">
                                    <div class="body-head">Highlights

                                    </div>
                                    <div class="body-item">
                                        <ul>
                                            <li><?php echo $row['hi1']; ?></li>
                                            <li><?php echo $row['hi2']; ?></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="footer">
                                    <h5>
                                        <?php echo $row['D_cast']; ?>₹
                                    </h5>
                                    <a href="selectadd.php?did=<?php echo $row['D_ID']; ?>" class="btn form-group">Continue</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    <?php }
    if ($Name == 'H') { ?>
        <div class="back" style="    background-color: #f7f8f9;">
            <div class="container">
                <div class="row hight">
                    <?php $sql = 'select * from ecomm_product_H where H_ID= "' . $ID . '"';
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="col-md-6 photo">
                            <div class="img-box w-100 h-100" style="padding: 0 14%;">
                                <img src=".//image/headphone/<?php echo $row['H_poster']; ?>" alt="" class="w-100">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="pro-detail">
                                <div class="head">
                                    <h6>
                                        <?php echo $row['H_name'];
                                        ' ';
                                        echo $row['H_last']; ?>
                                    </h6>
                                </div>
                                <div class="body">
                                    <div class="body-head">Highlights

                                    </div>
                                    <div class="body-item">
                                        <ul>
                                            <li><?php echo $row['hi1']; ?></li>
                                            <li><?php echo $row['hi2']; ?></li>
                                            <li><?php echo $row['hi3']; ?></li>
                                            <li><?php echo $row['hi4']; ?></li>
                                            <li><?php echo $row['hi5']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer">
                                    <h5>
                                        <?php echo $row['H_cast']; ?>₹
                                    </h5>
                                    <a href="selectadd.php?hid=<?php echo $row['H_ID']; ?>" class="btn form-group">Continue</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    <?php }
    if ($Name == 'L') { ?>
        <div class="back" style="    background-color: #f7f8f9;">
            <div class="container">
                <div class="row hight">
                    <?php $sql = 'select * from ecomm_product_L where L_ID= "' . $ID . '"';
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="col-md-6 photo">
                            <div class="img-box w-100 h-100" style="padding: 0 14%;">
                                <img src=".//image/laptop/<?php echo $row['L_poster']; ?> " alt="" class="w-100">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="pro-detail">
                                <div class="head">
                                    <h6>
                                        <?php echo $row['L_name'];
                                        '';
                                        echo $row['L_last']; ?>
                                    </h6>
                                </div>
                                <div class="body">
                                    <div class="body-head">Highlights

                                    </div>
                                    <div class="body-item">
                                        <ul>
                                            <li><?php echo $row['hi1']; ?></li>
                                            <li><?php echo $row['hi2']; ?></li>
                                            <li><?php echo $row['hi3']; ?></li>
                                            <li><?php echo $row['hi4']; ?></li>
                                            <li><?php echo $row['hi5']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer">
                                    <h5>
                                        <?php echo $row['L_cast']; ?>₹
                                    </h5>
                                    <a href="selectadd.php?lid=<?php echo $row['L_ID']; ?>" class="btn form-group">Continue</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


    <?php }
    if ($Name == 'T') { ?>

        <div class="back" style="    background-color: #f7f8f9;">
            <div class="container">
                <div class="row hight">
                    <?php $sql = 'select * from ecomm_product_T where T_ID= "' . $ID . '"';
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="col-md-6 photo">
                            <div class="img-box w-100 h-100">
                                <img src=".//image/ledtv/<?php echo $row['T_poster']; ?> " alt="" class="w-100">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="pro-detail">
                                <div class="head">
                                    <h6>
                                        <?php echo $row['T_name'];
                                        ' ';
                                        echo $row['T_last']; ?>
                                    </h6>
                                </div>
                                <div class="body">
                                    <div class="body-head">Highlights

                                    </div>
                                    <div class="body-item">
                                        <ul>
                                            <li><?php echo $row['hi1']; ?></li>
                                            <li><?php echo $row['hi2']; ?></li>
                                            <li><?php echo $row['hi3']; ?></li>
                                            <li><?php echo $row['hi4']; ?></li>
                                            <li><?php echo $row['hi5']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer">
                                    <h5>
                                        <?php echo $row['T_cast']; ?>₹
                                    </h5>
                                    <a href="selectadd.php?tid=<?php echo $row['T_ID']; ?>" class="btn form-group">Continue</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    <?php }
    if ($Name == 'S') { ?>

        <div class="back" style="    background-color: #f7f8f9;">
            <div class="container">
                <div class="row hight">
                    <?php $sql = 'select * from ecomm_product_S where S_ID= "' . $ID . '"';
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="col-md-6 photo">
                            <div class="img-box w-100 h-100" style="padding: 0% 14%;">
                                <img src=".//image/phone/<?php echo $row['S_poster']; ?>" alt="" class="w-100">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="pro-detail">
                                <div class="head">
                                    <h6>
                                        <?php echo $row['S_name'];
                                        ' ';
                                        echo $row['S_last']; ?>
                                    </h6>
                                </div>
                                <div class="body">
                                    <div class="body-head">Highlights

                                    </div>
                                    <div class="body-item">
                                        <ul>
                                            <li><?php echo $row['hi1']; ?></li>
                                            <li><?php echo $row['hi2']; ?></li>
                                            <li><?php echo $row['hi3']; ?></li>
                                            <li><?php echo $row['hi4']; ?></li>
                                            <li><?php echo $row['hi5']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer">
                                    <h5>
                                        <?php echo $row['S_cast']; ?>₹
                                    </h5>
                                    <a href="selectadd.php?sid=<?php echo $row['S_ID']; ?>" class="btn form-group">Continue</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    <?php }
    include ('pro.php');
}

include ('footer.php');
?>