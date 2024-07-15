<?php
include 'config.php';

$id = $_POST['id'];
$house = $_POST['house'];
$street = $_POST['street'];
$city = $_POST["city"];
$state = $_POST["state"];
$district = $_POST["district"];
$pin = $_POST["pin"];

$sql = "INSERT INTO ecomm_address(A_House_No,A_Street,A_City,A_State,A_District,A_Pincode,pro_id) VALUES ('{$house}','{$street}','{$city}', '{$state}','{$district}','{$pin}','{$id}')";

if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    echo 0;
}

?>