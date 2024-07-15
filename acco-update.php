<?php

include 'config.php';
session_start();
$id = $_POST['id'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST["email"];
$phone1 = $_POST["phone1"];
$phone2 = $_POST["phone2"];


$sql = "UPDATE ecomm_registration SET R_NAME = '{$name}',R_DOB='{$dob}',R_EMAIL = '{$email}', R_PHONE_NO1 = '{$phone1}',R_PHONE_NO2='{$phone2}' WHERE R_ID = '{$id}'";
$sql1 = "UPDATE ecomm_login SET L_EMAIL ='{$email}', L_PHONE = '{$phone1}' WHERE L_ID = '{$id}'";


if (mysqli_query($con, $sql) and mysqli_query($con, $sql1)) {
    echo 1;
    $_SESSION['success'] = "Account Udated.";

} else {
    echo 0;
}
?>