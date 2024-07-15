<?php
include ('config.php');
$name = $_GET['name'];
$id = $_GET['id'];
session_start();

$proid = $_SESSION['user'];

if ($name == 'S') {
    $sql = "select * from ecomm_product_S where S_ID= '" . $id . "'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $names = $row['S_name'];
    $last = $row['S_last'];
    $h1 = $row['hi1'];
    $h2 = $row['hi2'];
    $h3 = $row['hi3'];
    $h4 = $row['hi4'];
    $h5 = $row['hi5'];
    $poster = $row['S_poster'];
    $cast = $row['S_cast'];

    $sql1 = "insert into mycard(C_name,C_last,hi1,hi2,hi3,hi4,hi5,C_poster,C_cast,C_cati,pro_id) values( '{$names}','{$last}','{$h1}','{$h2}','{$h3}','{$h4}','{$h5}','{$poster}','{$cast}','{$name}','{$proid}')";
    $result1 = mysqli_query($con, $sql1);

} elseif ($name == 'L') {
    $sql = "select * from ecomm_product_L where L_ID= '" . $id . "'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $names = $row['L_name'];
    $last = $row['L_last'];
    $h1 = $row['hi1'];
    $h2 = $row['hi2'];
    $h3 = $row['hi3'];
    $h4 = $row['hi4'];
    $h5 = $row['hi5'];
    $poster = $row['L_poster'];
    $cast = $row['L_cast'];

    $sql1 = "insert into mycard(C_name,C_last,hi1,hi2,hi3,hi4,hi5,C_poster,C_cast,C_cati,pro_id) values( '{$names}','{$last}','{$h1}','{$h2}','{$h3}','{$h4}','{$h5}','{$poster}','{$cast}','{$name}','{$proid}')";
    $result1 = mysqli_query($con, $sql1);
} elseif ($name == 'T') {
    $sql = "select * from ecomm_product_T where T_ID= '" . $id . "'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $names = $row['T_name'];
    $last = $row['T_last'];
    $h1 = $row['hi1'];
    $h2 = $row['hi2'];
    $h3 = $row['hi3'];
    $h4 = $row['hi4'];
    $h5 = $row['hi5'];
    $poster = $row['T_poster'];
    $cast = $row['T_cast'];

    $sql1 = "insert into mycard(C_name,C_last,hi1,hi2,hi3,hi4,hi5,C_poster,C_cast,C_cati,pro_id) values( '{$names}','{$last}','{$h1}','{$h2}','{$h3}','{$h4}','{$h5}','{$poster}','{$cast}','{$name}','{$proid}')";
    $result1 = mysqli_query($con, $sql1);

} elseif ($name == 'H') {
    $sql = "select * from ecomm_product_H where H_ID= '" . $id . "'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $names = $row['H_name'];
    $last = $row['H_last'];
    $h1 = $row['hi1'];
    $h2 = $row['hi2'];
    $h3 = $row['hi3'];
    $h4 = $row['hi4'];
    $h5 = $row['hi5'];
    $poster = $row['H_poster'];
    $cast = $row['H_cast'];

    $sql1 = "insert into mycard(C_name,C_last,hi1,hi2,hi3,hi4,hi5,C_poster,C_cast,C_cati,pro_id) values( '{$names}','{$last}','{$h1}','{$h2}','{$h3}','{$h4}','{$h5}','{$poster}','{$cast}','{$name}','{$proid}')";
    $result1 = mysqli_query($con, $sql1);

} elseif ($name == 'D') {
    $sql = "select * from ecomm_product_D where D_ID= '" . $id . "'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $names = $row['D_name'];
    $last = $row['D_last'];
    $h1 = $row['hi1'];
    $h2 = $row['hi2'];
    $poster = $row['D_poster'];
    $cast = $row['D_cast'];

    $sql1 = "insert into mycard(C_name,C_last,hi1,hi2,C_poster,C_cast,C_cati,pro_id) values( '{$names}','{$last}','{$h1}','{$h2}','{$poster}','{$cast}','{$name}','{$proid}')";
    $result1 = mysqli_query($con, $sql1);
}

header('location: ./cart.php');

?>