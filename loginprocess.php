<?php
include ('config.php');

session_start();

$email = $_POST['Email'];
$pass = $_POST['Password'];
if ($email != "" && $pass != "") {
    $sql = "SELECT * FROM ecomm_login WHERE (L_EMAIL='{$email}' OR L_PHONE= '{$email}') AND L_PASSWORD='{$pass}'";
    $result = mysqli_query($con, $sql);
    if ($row = mysqli_fetch_array($result)) {
        echo 'error';

        $_SESSION['user'] = $row['L_ID'];
        $_SESSION['success'] = 'Login Success';
        header('location: ./index.php');
    } else {
        $_SESSION['error'] = 'Login Failed';
        header('location: ./login.php');
    }
} else {
    $_SESSION['error'] = 'Login Failed';
    header('location: ./login.php');
}
?>