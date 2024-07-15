<?php
include ('header.php');
include ('config.php');
if (!isset($_SESSION['user'])) { ?>
    <script>
        window.location.href = 'login.php';
    </script>
    <?php
}

$id = $_SESSION['user'];
?>

<div class="head-title">
    <h1>My Cart
    </h1>
</div>

<div class="container padding">
    <div class="row justify-content-center">
        <?php $sql = 'select * from mycard where pro_id = "' . $id . '" ';
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="box1">
                    <div class="option-box">
                        <div class="options">
                            <a href="buy.php?id=<?php echo $row['C_ID']; ?>&cart=C" class="option1">Buy Now</a>
                            <a href="remove.php?id=<?php echo $row['C_ID']; ?>" class="option2">Remove to cart</a>
                        </div>
                    </div>
                    <div class="box-img">
                        <img src=".//image/card/<?php echo $row['C_poster']; ?>" alt="">
                    </div>
                    <div class="box-detail">
                        <h5>
                            <?php echo $row['C_name']; ?>
                        </h5>
                        <h6>
                            <?php echo $row['C_cast']; ?>₹
                        </h6>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include ('footer.php'); ?>