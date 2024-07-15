<?php
include ('header.php');
include ('config.php');
if (!isset($_SESSION['user'])) { ?>
    <script>
        window.location.href = 'login.php';
    </script>
    <?php
}
$user = $_SESSION['user'];
$cid = "";
$did = '';
$sid = '';
$tid = '';
$hid = '';
$lid = '';

if (isset($_GET['cid'])) {
    $cid = $_GET['cid'];
} elseif (isset($_GET['did'])) {
    $did = $_GET['did'];
} elseif (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
} elseif (isset($_GET['tid'])) {
    $tid = $_GET['tid'];
} elseif (isset($_GET['lid'])) {
    $lid = $_GET['lid'];
} elseif (isset($_GET['hid'])) {
    $hid = $_GET['hid'];
}
?>

<div class="container-flude">
    <div class="row" style="margin: 0;">
        <div class="offset-md-2 col-md-8 mt-5 mb-5">
            <div class="payment">
                <div class="payment-title">
                    <h3>SELECT ADDRESS</h3>
                </div>
                <div class="pay-option">
                    <div class="card-box ">
                        <div class="form-box">
                            <div class="row ">
                                <input id="hide" hidden value="<?php echo $_SESSION['user']; ?>" />
                                <div class="col" id="add-read">
                                    <?php $sql = "SELECT * FROM ecomm_address WHERE pro_id = '$user' ";
                                    $result = mysqli_query($con, $sql);
                                    $a = 1;
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <div class="py-3 border-bottom border-dark" style="padding: 0 10%;" id="sh">
                                            <div class="d-flex align-items-center" id="tb">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="lebal<?php echo $a; ?>">
                                                    <label class="form-check-label" for="lebal<?php echo $a; ?>">

                                                        <p style=" padding: 0 5%;">

                                                            <?php
                                                            echo $row["A_House_No"];
                                                            echo $row["A_Street"];
                                                            echo $row["A_City"];
                                                            echo $row["A_District"];
                                                            echo $row["A_State"];
                                                            echo $row["A_Pincode"];
                                                            ?>
                                                        </p>
                                                    </label>
                                                </div>
                                                <p style=" padding: 0 3%; margin: 0;">
                                                    <a href="address.php" class="btn btn-danger" id="edit">Edit</a>
                                                </p>
                                                <p style=" padding: 0 3%; margin: 0;">
                                                    <a href="Payment.php?cid=<?php echo $cid; ?>&did=<?php echo $did; ?>&sid=<?php echo $sid; ?>&lid=<?php echo $lid; ?>&tid=<?php echo $tid; ?>&hid=<?php echo $hid; ?>&add=<?php echo $row['A_ID']; ?>"
                                                        class="btn btn-success" id="next">Next</a>
                                                </p>
                                            </div>
                                        </div>
                                        <?php $a++;
                                    } ?>
                                </div>
                                <div class="py-3 d-flex justify-content-between" style="padding: 0 10%;">
                                    <h5>Add Address</h5>
                                    <a href="./address.php" class="btn btn-primary" id="add">ADD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>