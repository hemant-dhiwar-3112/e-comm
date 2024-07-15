
<div class="container padding">
    <div class="row justify-content-center">

        <!-- ------------------------------- phone --------------------------------------------- -->

        <?php if ($Name == "S") {
            $sql = 'select * from ecomm_product_S';
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-md-4 col-lg-3 col-sm-6">
                    <div class="box1">
                        <div class="option-box">
                            <div class="options">
                                <a href="buy.php?id=<?php echo $row['S_ID']; ?>&name=S&cart=p" class="option1">Buy Now</a>
                                <a href="" class="option2">Add to cart</a>
                            </div>
                        </div>
                        <div class="box-img">
                            <img src=".//image/phone/<?php echo $row['S_poster']; ?>" alt="">
                        </div>
                        <div class="box-detail">
                            <h5>
                                <?php echo $row['S_name']; ?>
                            </h5>
                            <h6>
                                <?php echo $row['S_cast']; ?>₹
                            </h6>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>

        <!-- --------------------------------------- LAPTOP --------------------------------------- -->

        <?php if ($Name == "L") {
            $sql = 'select * from ecomm_product_L';
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-md-4 col-lg-3 col-sm-6">
                    <div class="box1">
                        <div class="option-box">
                            <div class="options">
                                <a href="buy.php?id=<?php echo $row['L_ID']; ?>&name=L&cart=p" class="option1">Buy Now</a>
                                <a href="" class="option2">Add to cart</a>
                            </div>
                        </div>
                        <div class="box-img">
                            <img src=".//image/laptop/<?php echo $row['L_poster']; ?>" alt="">
                        </div>
                        <div class="box-detail">
                            <h5>
                                <?php echo $row['L_name']; ?>
                            </h5>
                            <h6>
                                <?php echo $row['L_cast']; ?>₹
                            </h6>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>

        <!-- --------------------------------------- LEDTV ------------------------------------- -->

        <?php if ($Name == "T") {
            $sql = 'select * from ecomm_product_T';
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-md-4 col-lg-3 col-sm-6">
                    <div class="box1">
                        <div class="option-box">
                            <div class="options">
                                <a href="buy.php?id=<?php echo $row['T_ID']; ?>&name=T&cart=p" class="option1">Buy Now</a>
                                <a href="" class="option2">Add to cart</a>
                            </div>
                        </div>
                        <div class="box-img">
                            <img src=".//image/ledtv/<?php echo $row['T_poster']; ?>" alt="" lazy="true">
                        </div>
                        <div class="box-detail">
                            <h5>
                                <?php echo $row['T_name']; ?>
                            </h5>
                            <h6>
                                <?php echo $row['T_cast']; ?>₹
                            </h6>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>

        <!-- ----------------------------------------- HEADPHONE --------------------------------- -->

        <?php if ($Name == "H") {
            $sql = 'select * from ecomm_product_H';
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-md-4 col-lg-3 col-sm-6">
                    <div class="box1">
                        <div class="option-box">
                            <div class="options">
                                <a href="buy.php?id=<?php echo $row['H_ID']; ?>&name=H&cart=p" class="option1">Buy Now</a>
                                <a href="" class="option2">Add to cart</a>
                            </div>
                        </div>
                        <div class="box-img">
                            <img src=".//image/headphone/<?php echo $row['H_poster']; ?>" alt="">
                        </div>
                        <div class="box-detail">
                            <h5>
                                <?php echo $row['H_name']; ?>
                            </h5>
                            <h6>
                                <?php echo $row['H_cast']; ?>₹
                            </h6>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>

        <!-- ----------------------------------------- DRESS ----------------------------------- -->

        <?php if ($Name == "D") {
            $sql = 'select * from ecomm_product_D';
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-md-4 col-lg-3 col-sm-6">
                    <div class="box1">
                        <div class="option-box">
                            <div class="options">
                                <a href="buy.php?id=<?php echo $row['D_ID']; ?>&name=D&cart=p" class="option1">Buy Now</a>
                                <a href="" class="option2">Add to cart</a>
                            </div>
                        </div>
                        <div class="box-img">
                            <img src=".//image/dreesh/<?php echo $row['D_poster']; ?>" alt="">
                        </div>
                        <div class="box-detail">
                            <h5>
                                <?php echo $row['D_name']; ?>
                            </h5>
                            <h6>
                                <?php echo $row['D_cast']; ?>₹
                            </h6>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>
</div>
