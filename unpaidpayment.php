<?php include ('config.php');

session_start();
function otpgen($n)
{
    $gen = "1357902468";
    $res = "";
    for ($i = 1; $i <= $n; $i++) {

        $res = $res .= substr($gen, (rand() % (strlen($gen))), 1);
    }
    return $res;
}


function reload()
{
    echo '<div style=" display: flex;
    justify-content: center;"><table style="text-align:center;">
    <tr>
        <td><STRONG>Transaction is being processed,</STRONG></td>
    </tr>
    <tr>
        <td>
            <img src="./image/Loading_icon.gif"
                    alt=""><div >Please Wait  </div>
        </td>
    </tr>
    <br>
    <tr>
        <td>(Do not "RELOAD" this page or "CLOSE" this page)</td>
    </tr>
</table>
</div>';

}

$ordernum = otpgen(15);


$add = $_GET['add'];
$address = '';
$proid = '';
$sql1 = "SELECT * FROM ecomm_address WHERE A_ID = '{$add}'";
$result1 = mysqli_query($con, $sql1);

while ($row1 = mysqli_fetch_array($result1)) {
    $address = $row1['A_House_No'] . '
    ' . $row1['A_Street'] . '
    ' . $row1['A_City'] . '
    ' . $row1['A_State'] . '
    ' . $row1['A_District'] . '
    ' . $row1['A_Pincode'];
    $proid = $row1['pro_id'];
}


$cid = $_GET['cid'];
$sid = $_GET['sid'];
$did = $_GET['did'];
$lid = $_GET['lid'];
$hid = $_GET['hid'];
$tid = $_GET['tid'];

$paid = 'Unpaid &#10006;';
$date = getdate();
$datetime = "$date[mday]-$date[month]-$date[year]";

if ($cid != '') {

    $fname = '';
    $lname = '';
    $photo = '';
    $amount = '';
    $sql = 'select * from mycard where C_ID= "' . $cid . '"';
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $fname = $row['C_name'];
        $lname = $row['C_last'];
        $photo = $row['C_poster'];
        $amount = $row['C_cast'];
        $cati = $row['C_cati'];
    }
    $sql2 = "INSERT INTO ecomm_order(O_order_No,O_fname,O_lname,O_addres,O_photo,O_amount,O_status,O_datetime,O_catigary,O_dstatus,pro_id) VALUES ('{$ordernum}','{$fname}','{$lname}','{$address}','{$photo}','{$amount}','{$paid}','{$datetime}','{$cati}','processing','{$proid}')";
    $result2 = mysqli_query($con, $sql2);
    reload();
    $_SESSION['success'] = 'Order Success';
    echo '<script>
    setTimeout(function () {
        window.location = "order.php";
    }, 3000);
</script>';
}
if ($sid !== '') {
    $fname = '';
    $lname = '';
    $photo = '';
    $amount = '';
    $sql = 'select * from ecomm_product_s where S_ID= "' . $sid . '"';
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $fname = $row['S_name'];
        $lname = $row['S_last'];
        $photo = $row['S_poster'];
        $amount = $row['S_cast'];
    }
    $sql2 = "INSERT INTO ecomm_order(O_order_No,O_fname,O_lname,O_addres,O_photo,O_amount,O_status,O_datetime,O_catigary,O_dstatus,pro_id) VALUES ('{$ordernum}','{$fname}','{$lname}','{$address}','{$photo}','{$amount}','{$paid}','{$datetime}','S','processing','{$proid}')";
    $result2 = mysqli_query($con, $sql2);
    reload();

        $_SESSION['success'] = 'Order Success';
    echo '<script>
    setTimeout(function () {
        window.location = "order.php";
    }, 3000);
</script>';

}
if ($did !== '') {
    $fname = '';
    $lname = '';
    $photo = '';
    $amount = '';
    $sql = 'select * from ecomm_product_d where D_ID= "' . $did . '"';
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $fname = $row['D_name'];
        $lname = $row['D_last'];
        $photo = $row['D_poster'];
        $amount = $row['D_cast'];
    }
    $sql2 = "INSERT INTO ecomm_order(O_order_No,O_fname,O_lname,O_addres,O_photo,O_amount,O_status,O_datetime,O_catigary,O_dstatus,pro_id) VALUES ('{$ordernum}','{$fname}','{$lname}','{$address}','{$photo}','{$amount}','{$paid}','{$datetime}','D','processing','{$proid}')";
    $result2 = mysqli_query($con, $sql2);
    reload();
    $_SESSION['success'] = 'Order Success';
    echo '<script>
    setTimeout(function () {
        window.location = "order.php";
    }, 3000);
</script>';

}
if ($lid !== '') {
    $fname = '';
    $lname = '';
    $photo = '';
    $amount = '';
    $sql = 'select * from ecomm_product_l where L_ID= "' . $lid . '"';
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $fname = $row['L_name'];
        $lname = $row['L_last'];
        $photo = $row['L_poster'];
        $amount = $row['L_cast'];
    }
    $sql2 = "INSERT INTO ecomm_order(O_order_No,O_fname,O_lname,O_addres,O_photo,O_amount,O_status,O_datetime,O_catigary,O_dstatus,pro_id) VALUES ('{$ordernum}','{$fname}','{$lname}','{$address}','{$photo}','{$amount}','{$paid}','{$datetime}','L','processing','{$proid}')";
    $result2 = mysqli_query($con, $sql2);
    reload();
    $_SESSION['success'] = 'Order Success';
    echo '<script>
    setTimeout(function () {
        window.location = "order.php";
    }, 3000);
</script>';

}
if ($hid !== '') {
    $fname = '';
    $lname = '';
    $photo = '';
    $amount = '';
    $sql = 'select * from ecomm_product_h where H_ID= "' . $hid . '"';
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $fname = $row['H_name'];
        $lname = $row['H_last'];
        $photo = $row['H_poster'];
        $amount = $row['H_cast'];
    }
    $sql2 = "INSERT INTO ecomm_order(O_order_No,O_fname,O_lname,O_addres,O_photo,O_amount,O_status,O_datetime,O_catigary,O_dstatus,pro_id) VALUES ('{$ordernum}','{$fname}','{$lname}','{$address}','{$photo}','{$amount}','{$paid}','{$datetime}','H','processing','{$proid}')";
    $result2 = mysqli_query($con, $sql2);
    reload();
    $_SESSION['success'] = 'Order Success';
    echo '<script>
    setTimeout(function () {
        window.location = "order.php";
    }, 3000);
</script>';
}
if ($tid != '') {
    $fname = '';
    $lname = '';
    $photo = '';
    $amount = '';
    $sql = 'select * from ecomm_product_t where T_ID= "' . $tid . '"';
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $fname = $row['T_name'];
        $lname = $row['T_last'];
        $photo = $row['T_poster'];
        $amount = $row['T_cast'];
    }
    $sql2 = "INSERT INTO ecomm_order(O_order_No,O_fname,O_lname,O_addres,O_photo,O_amount,O_status,O_datetime,O_catigary,O_dstatus,pro_id) VALUES ('{$ordernum}','{$fname}','{$lname}','{$address}','{$photo}','{$amount}','{$paid}','{$datetime}','T','processing','{$proid}')";
    $result2 = mysqli_query($con, $sql2);
    reload();
    $_SESSION['success'] = 'Order Success';
    echo '<script>
    setTimeout(function () {
        window.location = "order.php";
    }, 3000);
</script>';

}


?>