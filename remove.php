<?php
$id = $_GET['id'];
include('config.php');

$sql = "delete from mycard where C_ID= '" . $id . "'";
$result = mysqli_query($con, $sql);

header('location: ./cart.php');
?>