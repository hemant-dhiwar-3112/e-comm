<?php
include 'header.php';
if (!isset($_SESSION['user'])) { ?>
    <script>
        window.location.href = 'login.php';
    </script>
    <?php
}
function otpgen($n)
{
    $gen = "1357902468";
    $res = "";
    for ($i = 1; $i <= $n; $i++) {

        $res = $res .= substr($gen, (rand() % (strlen($gen))), 1);
    }
    return $res;
}

$otp = otpgen(6);
$add = $_GET['add'];
$cid = '';
$sid = '';
$did = '';
$lid = '';
$hid = '';
$tid = '';

if (isset($_GET['cid'])) {
    $cid = $_GET['cid'];
}
if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
}
if (isset($_GET['did'])) {
    $did = $_GET['did'];
}
if (isset($_GET['lid'])) {
    $lid = $_GET['lid'];
}
if (isset($_GET['hid'])) {
    $hid = $_GET['hid'];
}
if (isset($_GET['tid'])) {
    $tid = $_GET['tid'];
}
?>


<div class="container">
    <div class="row">
        <div class="offset-md-2 col-md-8 mt-5 mb-5">
            <div class="payment">
                <div class="payment-title">
                    <h3>PAYMENT</h3>
                </div>
                <div class="pay-option">
                    <div class="card-box border-bottom border-dark">
                        <div class="card-credit">
                            <p>Credit/ Debit/ ATM card</p>
                            <div class="card-imgs">
                                <img src=".//image/mastercard.png" alt="">
                                <img src=".//image/visa.png" alt="">
                                <img src=".//image/amex.png" alt="">
                            </div>
                        </div>
                        <div class="form-box">
                            <div class="row">
                                <div class="offset-md-2 col-md-8">
                                    <form class="form-com" action="conpayment.php" method="POST">
                                        <div class="form-group">
                                            <label class="control-label">Card Holder
                                                Name</label><br>
                                            <input type="text" class="form-control input"
                                                title="Enter 16 digit card number" id="pname">
                                            <div id="mpname" class="error1"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Card Number</label><br>
                                            <input type="text" class="form-control input"
                                                title="Enter 16 digit card number" id="pnumber">
                                            <div id="mpnumber" class="error1"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Expiration
                                                date</label><br>
                                            <div class="d-flex">
                                                <select name="" id="psel1" style="height: 37px; padding: 0 0 0 10px;"
                                                    class="form-control form-select input">
                                                    <option value="">Month</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                                <select name="" id="psel2"
                                                    style="padding: 0 0 0 13px; height: 37px; margin-left: 20px;"
                                                    class="form-control form-select input" readonly>
                                                    <option value="">Year</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                    <option value="2031">2031</option>
                                                    <option value="2032">2032</option>
                                                    <option value="2033">2033</option>
                                                </select>
                                            </div>
                                            <div id="mpsel" class="error1"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">CVV</label><br>
                                            <input type="text" class="form-control input" id="pcvv">
                                            <div id="mpcvv" class="error1"></div>
                                        </div>
                                        <a class="btn btn-primary m-3 py-2 px-5" id="potp">OTP</a>
                                        <br>

                                        <div id="hide" class="d-none">
                                            <label class="control-label" id="plcard">OTP</label><br>
                                            <div class="d-flex justify-content-around">
                                                <input type="text" class="form-control input" name="otp1" id="optcon"
                                                    style="width: 40%;">
                                                <input id="otpcait" name="otp" value="<?php echo $otp; ?>" hidden>
                                                <input name="addresh" value="<?php echo $add; ?>" hidden>
                                                <input name="cid" value="<?php echo $cid; ?>" hidden>
                                                <input name="did" value="<?php echo $did; ?>" hidden>
                                                <input name="sid" value="<?php echo $sid; ?>" hidden>
                                                <input name="lid" value="<?php echo $lid; ?>" hidden>
                                                <input name="hid" value="<?php echo $hid; ?>" hidden>
                                                <input name="tid" value="<?php echo $tid; ?>" hidden>
                                                <input name="paid" value="paid" hidden>


                                                <button type="submit" class="btn btn-warning m-2 py-2 px-4 d-none"
                                                    id="submit">PAY
                                                    4000₹</button>
                                            </div>
                                            <div class="erroe1" id="motp"></div>
                                            <p id="otpcait"><?php echo $otp ?></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cash-delivery border-bottom border-dark">
                        <p>Cash on Delivery</p>
                        <a href="unpaidpayment.php?cid=<?php echo $cid; ?>&did=<?php echo $did; ?>&sid=<?php echo $sid; ?>&lid=<?php echo $lid; ?>&tid=<?php echo $tid; ?>&hid=<?php echo $hid; ?>&add=<?php echo $add; ?>"
                            class="btn form-btn m-0">Conform Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ('footer.php'); ?>

<script src=".//js/Payment.js"></script>

<script>
    $(document).ready(function () {
        let otp1 = $('#otpcait').val();
        $(document).on('input', '#optcon', function () {
            otp = $('#optcon').val();
            if (otp === "") {
                $('#motp').addClass('d-block invalid-feedback');
                $('#motp').text('Enter OTP');
                $('#optcon').addClass('is-invalid');
            } else if (isNaN(otp)) {
                $('#motp').addClass('d-block invalid-feedback');
                $('#motp').text('Enter Number');
                $('#optcon').addClass('is-invalid');
            } else if (otp === otp1) {
                $('#optcon').addClass('is-valid');
                $('#optcon').removeClass('is-invalid');
                $('#submit').removeClass('d-none');
                $('#motp').addClass('d-none');

            } else {
                $('#motp').addClass('d-block invalid-feedback');
                $('#motp').text('Enter valid OTP');
                $('#optcon').addClass('is-invalid');
            }
        });

    });

</script>