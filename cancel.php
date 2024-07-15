<?php
include ('config.php');
session_start();
$id = $_POST['id'];
$sql = "UPDATE ecomm_order SET O_dstatus = 'cancel' WHERE O_ID = '{$id}'";
if (mysqli_query($con, $sql)) {
    echo 1;
    $_SESSION['success'] = "Order Canceled.";
} else {
    echo 0;
}

?>