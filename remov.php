<?php
$id = $_POST['id'];
include('config.php');
session_start();
$sql = "delete from ecomm_order where O_ID= '" . $id . "'";
if (mysqli_query($con, $sql)) {
    echo 1;
    $_SESSION['success'] = "Item Remove.";
} else {
    echo 0;
}
?>