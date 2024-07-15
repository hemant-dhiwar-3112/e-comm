<?php
session_start();
include 'config.php';

$id = $_POST['id'];
$house = $_POST['house'];
$street = $_POST['street'];
$city = $_POST["city"];
$state = $_POST["state"];
$district = $_POST["district"];
$pin = $_POST["pin"];

$sql = "UPDATE ecomm_address SET A_House_No = '{$house}',A_Street='{$street}',A_City = '{$city}', A_District = '{$district}',A_Pincode = '{$pin}' WHERE A_ID = '{$id}'";


if (mysqli_query($con, $sql)) {
    $_SESSION['success'] = 'bgh';
    echo 1;
} else {
    echo 0;
}
?>