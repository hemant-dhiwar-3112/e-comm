<?php

session_start();
include 'config.php';
$id = $_POST['id'];
$old = $_POST['old'];
$newp = $_POST['newp'];
$sql = "SELECT * FROM ecomm_login WHERE L_ID=$id";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

if ($row['L_PASSWORD'] == $old) {
    $sql1 = "UPDATE ecomm_login SET L_PASSWORD = '{$newp}' WHERE L_ID='{$id}'";
    $result1 = mysqli_query($con, $sql1);
    $_SESSION['success'] = "Password Chaned.";
} else {
    $_SESSION['error'] = 'Old Password Not Macth.';
}
?>