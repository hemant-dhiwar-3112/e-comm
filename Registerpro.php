<?php

session_start();
include ('config.php');

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$compass = $_POST['compass'];

if ($pass == $compass) {

    $sql = "INSERT INTO  ecomm_registration(R_NAME,R_PHONE_NO1,R_EMAIL) VALUES ('{$name}','{$number}','{$email}')";
    $result = mysqli_query($con, $sql);

    $sql1 = "INSERT INTO ecomm_login(L_EMAIL,L_PHONE,L_PASSWORD) VALUES ('{$email}','{$number}','{$pass}')";
    $result1 = mysqli_query($con, $sql1);

    $_SESSION['success'] = "Register Ssuccess.";
    header("location: ./login.php");
} else {
    $_SESSION['error'] = "Register Fail";
    header("location: ./Register.php");
}

?>